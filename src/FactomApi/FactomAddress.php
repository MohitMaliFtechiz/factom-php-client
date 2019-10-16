<?php 
namespace FactomApi;

//use Datto\JsonRpc\Http\Client;
// use Datto\JsonRpc\Http\Exceptions\HttpException;
// use Datto\JsonRpc\Responses\ErrorResponse;
// use Datto\JsonRpc\Server;
// use ErrorException;

/* new rpc client demo */

// use SimpleJsonRpcClient\Client\HttpPostClient as Client;

// use SimpleJsonRpcClient\Request\Request;
// use SimpleJsonRpcClient\Exception\BaseException;
// use SimpleJsonRpcClient\Response\Response;

use PhpJsonRpc\Client;

class FactomAddress
{
    /* address */
    public static function address($address){
        $client = new Client(walletHost);
        $result = $client->call('address',["address" => $address]);
        print_r($result);
    }

    /* all addresses */

    public static function allAddresses()
    {
        $client = new Client(walletHost);
        $result = $client->call('all-addresses',['']);
        print_r($result);
    } 

     /* generateEcAddress */
    public static function generateEcAddress()
    {
        $client = new Client(walletHost);
        $result = $client->call('generate-ec-address',[]);
        print_r($result);

    }

    /* generateFactoidAddress */

    public static function generateFactoidAddress()
    {
        $client = new Client(walletHost);
        $result = $client->call('generate-ec-address',[]);
        print_r($result);
    }

    /* import-addresses */

    public static function importAddresses($secret)
    {
        $client = new Client(walletHost);
        $result = $client->call('generate-ec-address',["addresses" => ["secret" => $secret]]);
        print_r($result);
    }
    
}