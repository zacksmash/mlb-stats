<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Tracking Resources', function () {
    it('can create TrackingSoftwareVersions resource', function () {
        $resource = MlbStats::trackingSoftwareVersions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TrackingSoftwareVersions::class);
    });

    it('can create TrackingSystemOwners resource', function () {
        $resource = MlbStats::trackingSystemOwners();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TrackingSystemOwners::class);
    });

    it('can create TrackingVendors resource', function () {
        $resource = MlbStats::trackingVendors();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TrackingVendors::class);
    });

    it('can create TrackingVersions resource', function () {
        $resource = MlbStats::trackingVersions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TrackingVersions::class);
    });
});

describe('Transaction Resources', function () {
    it('can create TransactionTypes resource', function () {
        $resource = MlbStats::transactionTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TransactionTypes::class);
    });

    it('can create Transactions resource', function () {
        $resource = MlbStats::transactions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Transactions::class);
    });
});

describe('Uniform Resources', function () {
    it('can create UniformsByGame resource', function () {
        $resource = MlbStats::uniformsByGame();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\UniformsByGame::class);
    });

    it('can create UniformsByTeam resource', function () {
        $resource = MlbStats::uniformsByTeam();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\UniformsByTeam::class);
    });
});
