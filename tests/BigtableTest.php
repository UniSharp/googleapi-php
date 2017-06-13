<?php
namespace Tests;

use Google\Auth\CredentialsLoader;
use google\bigtable\admin\v2\BigtableInstanceAdminClient;
use google\bigtable\admin\v2\ListInstancesRequest;
use Grpc\UnaryCall;
use PHPUnit\Framework\TestCase;

class BigtableTest extends TestCase
{
    const SERVICE_ADDRESS = 'bigtable.googleapis.com';
    public function testBigtableClient()
    {

        $client = new BigtableInstanceAdminClient(
            'bigtable.googleapis.com:443', [
                'credentials' => CredentialsLoader::fromEnv()
            ]
        );

        $response = $client->ListInstances(new ListInstancesRequest());
        $this->assertInstanceOf(UnaryCall::class, $response);
    }
}
