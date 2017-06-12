<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace GPBMetadata\Google\Logging\V2;

class Logging
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af9110a1f676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
            "2e70726f746f1211676f6f676c652e6c6f6767696e672e76321a1c676f6f" .
            "676c652f6170692f616e6e6f746174696f6e732e70726f746f1a23676f6f" .
            "676c652f6170692f6d6f6e69746f7265645f7265736f757263652e70726f" .
            "746f1a21676f6f676c652f6c6f6767696e672f76322f6c6f675f656e7472" .
            "792e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174" .
            "696f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d70" .
            "74792e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d65" .
            "7374616d702e70726f746f1a17676f6f676c652f7270632f737461747573" .
            "2e70726f746f22240a1044656c6574654c6f675265717565737412100a08" .
            "6c6f675f6e616d651801200128092298020a1657726974654c6f67456e74" .
            "726965735265717565737412100a086c6f675f6e616d6518012001280912" .
            "2f0a087265736f7572636518022001280b321d2e676f6f676c652e617069" .
            "2e4d6f6e69746f7265645265736f7572636512450a066c6162656c731803" .
            "2003280b32352e676f6f676c652e6c6f6767696e672e76322e5772697465" .
            "4c6f67456e7472696573526571756573742e4c6162656c73456e74727912" .
            "2c0a07656e747269657318042003280b321b2e676f6f676c652e6c6f6767" .
            "696e672e76322e4c6f67456e74727912170a0f7061727469616c5f737563" .
            "636573731805200128081a2d0a0b4c6162656c73456e747279120b0a036b" .
            "6579180120012809120d0a0576616c75651802200128093a02380122190a" .
            "1757726974654c6f67456e7472696573526573706f6e736522c8010a1c57" .
            "726974654c6f67456e74726965735061727469616c4572726f7273125d0a" .
            "106c6f675f656e7472795f6572726f727318012003280b32432e676f6f67" .
            "6c652e6c6f6767696e672e76322e57726974654c6f67456e747269657350" .
            "61727469616c4572726f72732e4c6f67456e7472794572726f7273456e74" .
            "72791a490a134c6f67456e7472794572726f7273456e747279120b0a036b" .
            "657918012001280512210a0576616c756518022001280b32122e676f6f67" .
            "6c652e7270632e5374617475733a023801228d010a154c6973744c6f6745" .
            "6e74726965735265717565737412130a0b70726f6a6563745f6964731801" .
            "2003280912160a0e7265736f757263655f6e616d6573180820032809120e" .
            "0a0666696c74657218022001280912100a086f726465725f627918032001" .
            "280912110a09706167655f73697a6518042001280512120a0a706167655f" .
            "746f6b656e180520012809225f0a164c6973744c6f67456e747269657352" .
            "6573706f6e7365122c0a07656e747269657318012003280b321b2e676f6f" .
            "676c652e6c6f6767696e672e76322e4c6f67456e74727912170a0f6e6578" .
            "745f706167655f746f6b656e18022001280922500a274c6973744d6f6e69" .
            "746f7265645265736f7572636544657363726970746f7273526571756573" .
            "7412110a09706167655f73697a6518012001280512120a0a706167655f74" .
            "6f6b656e180220012809228a010a284c6973744d6f6e69746f7265645265" .
            "736f7572636544657363726970746f7273526573706f6e736512450a1472" .
            "65736f757263655f64657363726970746f727318012003280b32272e676f" .
            "6f676c652e6170692e4d6f6e69746f7265645265736f7572636544657363" .
            "726970746f7212170a0f6e6578745f706167655f746f6b656e1802200128" .
            "0922480a0f4c6973744c6f677352657175657374120e0a06706172656e74" .
            "18012001280912110a09706167655f73697a6518022001280512120a0a70" .
            "6167655f746f6b656e180320012809223e0a104c6973744c6f6773526573" .
            "706f6e736512110a096c6f675f6e616d657318032003280912170a0f6e65" .
            "78745f706167655f746f6b656e18022001280932dc050a104c6f6767696e" .
            "6753657276696365563212770a0944656c6574654c6f6712232e676f6f67" .
            "6c652e6c6f6767696e672e76322e44656c6574654c6f6752657175657374" .
            "1a162e676f6f676c652e70726f746f6275662e456d707479222d82d3e493" .
            "02272a252f763262657461312f7b6c6f675f6e616d653d70726f6a656374" .
            "732f2a2f6c6f67732f2a7d1286010a0f57726974654c6f67456e74726965" .
            "7312292e676f6f676c652e6c6f6767696e672e76322e57726974654c6f67" .
            "456e7472696573526571756573741a2a2e676f6f676c652e6c6f6767696e" .
            "672e76322e57726974654c6f67456e7472696573526573706f6e7365221c" .
            "82d3e493021622112f76322f656e74726965733a77726974653a012a1282" .
            "010a0e4c6973744c6f67456e747269657312282e676f6f676c652e6c6f67" .
            "67696e672e76322e4c6973744c6f67456e7472696573526571756573741a" .
            "292e676f6f676c652e6c6f6767696e672e76322e4c6973744c6f67456e74" .
            "72696573526573706f6e7365221b82d3e493021522102f76322f656e7472" .
            "6965733a6c6973743a012a12c5010a204c6973744d6f6e69746f72656452" .
            "65736f7572636544657363726970746f7273123a2e676f6f676c652e6c6f" .
            "6767696e672e76322e4c6973744d6f6e69746f7265645265736f75726365" .
            "44657363726970746f7273526571756573741a3b2e676f6f676c652e6c6f" .
            "6767696e672e76322e4c6973744d6f6e69746f7265645265736f75726365" .
            "44657363726970746f7273526573706f6e7365222882d3e493022212202f" .
            "76322f6d6f6e69746f7265645265736f7572636544657363726970746f72" .
            "7312790a084c6973744c6f677312222e676f6f676c652e6c6f6767696e67" .
            "2e76322e4c6973744c6f6773526571756573741a232e676f6f676c652e6c" .
            "6f6767696e672e76322e4c6973744c6f6773526573706f6e7365222482d3" .
            "e493021e121c2f76322f7b706172656e743d70726f6a656374732f2a7d2f" .
            "6c6f6773427e0a15636f6d2e676f6f676c652e6c6f6767696e672e763242" .
            "0c4c6f6767696e6750726f746f50015a38676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6c6f676769" .
            "6e672f76323b6c6f6767696e67f80101aa0217476f6f676c652e436c6f75" .
            "642e4c6f6767696e672e5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

