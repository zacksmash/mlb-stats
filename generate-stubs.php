<?php

/**
 * MLB Stats API Resource and Param Class Generator
 *
 * This script generates Resource and Param class stubs for the MLB Stats API package.
 *
 * Usage:
 *   php generate-stubs.php resource <ClassName> [endpoint] [required-params...]
 *   php generate-stubs.php param <TraitName> [properties...]
 *
 * Examples:
 *   php generate-stubs.php resource Teams teams teamId,leagueId
 *   php generate-stubs.php param HasPlayerId playerId
 */
if ($argc < 3) {
    echo "Usage:\n";
    echo "  php generate-stubs.php resource <ClassName> [endpoint] [required-params...]\n";
    echo "  php generate-stubs.php param <TraitName> [properties...]\n";
    echo "\nExamples:\n";
    echo "  php generate-stubs.php resource Teams teams teamId,leagueId\n";
    echo "  php generate-stubs.php param HasPlayerId playerId\n";
    exit(1);
}

$type = $argv[1];
$className = $argv[2];

switch ($type) {
    case 'resource':
        generateResourceClass($className, $argv[3] ?? null, $argv[4] ?? null);
        break;
    case 'param':
        generateParamTrait($className, array_slice($argv, 3));
        break;
    default:
        echo "Error: Type must be 'resource' or 'param'\n";
        exit(1);
}

function generateResourceClass(string $className, ?string $endpoint = null, ?string $requiredParams = null): void
{
    $endpoint = $endpoint ?? strtolower($className);
    $requiredParamsArray = $requiredParams ? explode(',', $requiredParams) : [];

    $requiresOneOfAttribute = '';
    if (! empty($requiredParamsArray)) {
        $paramsList = "'".implode("', '", $requiredParamsArray)."'";
        $requiresOneOfAttribute = "#[RequiresOneOf($paramsList)]\n";
    }

    // Generate use statements for common traits (can be customized)
    $useStatements = [
        'use Zacksmash\MlbStats\Params\HasFields;',
        'use Zacksmash\MlbStats\Params\HasSeason;',
    ];

    $traitUses = ['HasFields', 'HasSeason'];

    // Add specific traits based on required params
    foreach ($requiredParamsArray as $param) {
        $traitName = 'Has'.ucfirst($param);
        $useStatement = "use Zacksmash\MlbStats\Params\\$traitName;";
        if (! in_array($useStatement, $useStatements)) {
            $useStatements[] = $useStatement;
            $traitUses[] = $traitName;
        }
    }

    $useStatementsStr = implode("\n", $useStatements);
    $traitUsesStr = implode(', ', $traitUses);

    $content = "<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\Attributes\RequiresOneOf;
use Zacksmash\MlbStats\MlbStatsRequest;
$useStatementsStr

{$requiresOneOfAttribute}class $className extends MlbStatsRequest
{
    protected string \$endpoint = '$endpoint';

    use $traitUsesStr;
}
";

    $filePath = "src/Resources/$className.php";

    if (file_exists($filePath)) {
        echo "Warning: File $filePath already exists. Overwrite? (y/N): ";
        $handle = fopen('php://stdin', 'r');
        $line = fgets($handle);
        if (trim($line) !== 'y' && trim($line) !== 'Y') {
            echo "Cancelled.\n";

            return;
        }
        fclose($handle);
    }

    file_put_contents($filePath, $content);
    echo "Generated Resource class: $filePath\n";
}

function generateParamTrait(string $traitName, array $properties): void
{
    if (empty($properties)) {
        echo "Error: At least one property must be specified for param traits\n";
        exit(1);
    }

    // Remove 'Has' prefix if provided
    if (strpos($traitName, 'Has') === 0) {
        $traitName = $traitName;
    } else {
        $traitName = 'Has'.ucfirst($traitName);
    }

    $content = "<?php

namespace Zacksmash\MlbStats\Params;

trait $traitName
{\n";

    // Generate properties
    foreach ($properties as $property) {
        $content .= "    protected \$$property;\n\n";
    }

    // Generate methods
    foreach ($properties as $property) {
        $methodName = $property;
        $paramType = 'mixed'; // Default type, can be customized

        // Determine parameter type based on common patterns
        if (str_contains($property, 'Date')) {
            $paramType = 'string';
        } elseif (str_contains($property, 'Id')) {
            $paramType = 'mixed'; // Could be string or array
        }

        $content .= "    public function $methodName($paramType \$args): static\n";
        $content .= "    {\n";

        // Handle array parameters (like IDs that can accept multiple values)
        if (str_contains($property, 'Id')) {
            $pluralProperty = $property.'s';
            $content .= "        \${$pluralProperty} = is_array(\$args) ? \$args : func_get_args();\n\n";
            $content .= "        \$this->$property = implode(',', \${$pluralProperty});\n\n";
        } else {
            $content .= "        \$this->$property = \$args;\n\n";
        }

        $content .= "        return \$this;\n";
        $content .= "    }\n";

        if ($property !== end($properties)) {
            $content .= "\n";
        }
    }

    $content .= "}\n";

    $filePath = "src/Params/$traitName.php";

    if (file_exists($filePath)) {
        echo "Warning: File $filePath already exists. Overwrite? (y/N): ";
        $handle = fopen('php://stdin', 'r');
        $line = fgets($handle);
        if (trim($line) !== 'y' && trim($line) !== 'Y') {
            echo "Cancelled.\n";

            return;
        }
        fclose($handle);
    }

    file_put_contents($filePath, $content);
    echo "Generated Param trait: $filePath\n";
}
