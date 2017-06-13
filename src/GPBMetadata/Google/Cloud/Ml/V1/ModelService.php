<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace GPBMetadata\Google\Cloud\Ml\V1;

class ModelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Auth::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4140a26676f6f676c652f636c6f75642f6d6c2f76312f6d6f64656c5f" .
            "736572766963652e70726f746f1212676f6f676c652e636c6f75642e6d6c" .
            "2e76311a15676f6f676c652f6170692f617574682e70726f746f1a23676f" .
            "6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e7072" .
            "6f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f2294010a054d6f64656c120c0a046e616d65180120012809" .
            "12130a0b6465736372697074696f6e18022001280912340a0f6465666175" .
            "6c745f76657273696f6e18032001280b321b2e676f6f676c652e636c6f75" .
            "642e6d6c2e76312e56657273696f6e120f0a07726567696f6e7318042003" .
            "280912210a196f6e6c696e655f70726564696374696f6e5f6c6f6767696e" .
            "671805200128082290020a0756657273696f6e120c0a046e616d65180120" .
            "01280912130a0b6465736372697074696f6e18022001280912120a0a6973" .
            "5f64656661756c7418032001280812160a0e6465706c6f796d656e745f75" .
            "7269180420012809122f0a0b6372656174655f74696d6518052001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d7012310a" .
            "0d6c6173745f7573655f74696d6518062001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d7012170a0f72756e74696d655f" .
            "76657273696f6e18082001280912390a0e6d616e75616c5f7363616c696e" .
            "6718092001280b32212e676f6f676c652e636c6f75642e6d6c2e76312e4d" .
            "616e75616c5363616c696e67221e0a0d4d616e75616c5363616c696e6712" .
            "0d0a056e6f646573180120012805224e0a124372656174654d6f64656c52" .
            "657175657374120e0a06706172656e7418012001280912280a056d6f6465" .
            "6c18022001280b32192e676f6f676c652e636c6f75642e6d6c2e76312e4d" .
            "6f64656c224a0a114c6973744d6f64656c7352657175657374120e0a0670" .
            "6172656e7418012001280912120a0a706167655f746f6b656e1804200128" .
            "0912110a09706167655f73697a6518052001280522580a124c6973744d6f" .
            "64656c73526573706f6e736512290a066d6f64656c7318012003280b3219" .
            "2e676f6f676c652e636c6f75642e6d6c2e76312e4d6f64656c12170a0f6e" .
            "6578745f706167655f746f6b656e180220012809221f0a0f4765744d6f64" .
            "656c52657175657374120c0a046e616d6518012001280922220a1244656c" .
            "6574654d6f64656c52657175657374120c0a046e616d6518012001280922" .
            "540a1443726561746556657273696f6e52657175657374120e0a06706172" .
            "656e74180120012809122c0a0776657273696f6e18022001280b321b2e67" .
            "6f6f676c652e636c6f75642e6d6c2e76312e56657273696f6e224c0a134c" .
            "69737456657273696f6e7352657175657374120e0a06706172656e741801" .
            "2001280912120a0a706167655f746f6b656e18042001280912110a097061" .
            "67655f73697a65180520012805225e0a144c69737456657273696f6e7352" .
            "6573706f6e7365122d0a0876657273696f6e7318012003280b321b2e676f" .
            "6f676c652e636c6f75642e6d6c2e76312e56657273696f6e12170a0f6e65" .
            "78745f706167655f746f6b656e18022001280922210a1147657456657273" .
            "696f6e52657175657374120c0a046e616d6518012001280922240a144465" .
            "6c65746556657273696f6e52657175657374120c0a046e616d6518012001" .
            "280922280a1853657444656661756c7456657273696f6e52657175657374" .
            "120c0a046e616d6518012001280932eb090a0c4d6f64656c536572766963" .
            "65127f0a0b4372656174654d6f64656c12262e676f6f676c652e636c6f75" .
            "642e6d6c2e76312e4372656174654d6f64656c526571756573741a192e67" .
            "6f6f676c652e636c6f75642e6d6c2e76312e4d6f64656c222d82d3e49302" .
            "27221e2f76312f7b706172656e743d70726f6a656374732f2a7d2f6d6f64" .
            "656c733a056d6f64656c1283010a0a4c6973744d6f64656c7312252e676f" .
            "6f676c652e636c6f75642e6d6c2e76312e4c6973744d6f64656c73526571" .
            "756573741a262e676f6f676c652e636c6f75642e6d6c2e76312e4c697374" .
            "4d6f64656c73526573706f6e7365222682d3e4930220121e2f76312f7b70" .
            "6172656e743d70726f6a656374732f2a7d2f6d6f64656c7312720a084765" .
            "744d6f64656c12232e676f6f676c652e636c6f75642e6d6c2e76312e4765" .
            "744d6f64656c526571756573741a192e676f6f676c652e636c6f75642e6d" .
            "6c2e76312e4d6f64656c222682d3e4930220121e2f76312f7b6e616d653d" .
            "70726f6a656374732f2a2f6d6f64656c732f2a7d127c0a0b44656c657465" .
            "4d6f64656c12262e676f6f676c652e636c6f75642e6d6c2e76312e44656c" .
            "6574654d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772" .
            "756e6e696e672e4f7065726174696f6e222682d3e49302202a1e2f76312f" .
            "7b6e616d653d70726f6a656374732f2a2f6d6f64656c732f2a7d1294010a" .
            "0d43726561746556657273696f6e12282e676f6f676c652e636c6f75642e" .
            "6d6c2e76312e43726561746556657273696f6e526571756573741a1d2e67" .
            "6f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e223a82" .
            "d3e493023422292f76312f7b706172656e743d70726f6a656374732f2a2f" .
            "6d6f64656c732f2a7d2f76657273696f6e733a0776657273696f6e129401" .
            "0a0c4c69737456657273696f6e7312272e676f6f676c652e636c6f75642e" .
            "6d6c2e76312e4c69737456657273696f6e73526571756573741a282e676f" .
            "6f676c652e636c6f75642e6d6c2e76312e4c69737456657273696f6e7352" .
            "6573706f6e7365223182d3e493022b12292f76312f7b706172656e743d70" .
            "726f6a656374732f2a2f6d6f64656c732f2a7d2f76657273696f6e731283" .
            "010a0a47657456657273696f6e12252e676f6f676c652e636c6f75642e6d" .
            "6c2e76312e47657456657273696f6e526571756573741a1b2e676f6f676c" .
            "652e636c6f75642e6d6c2e76312e56657273696f6e223182d3e493022b12" .
            "292f76312f7b6e616d653d70726f6a656374732f2a2f6d6f64656c732f2a" .
            "2f76657273696f6e732f2a7d128b010a0d44656c65746556657273696f6e" .
            "12282e676f6f676c652e636c6f75642e6d6c2e76312e44656c6574655665" .
            "7273696f6e526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e" .
            "696e672e4f7065726174696f6e223182d3e493022b2a292f76312f7b6e61" .
            "6d653d70726f6a656374732f2a2f6d6f64656c732f2a2f76657273696f6e" .
            "732f2a7d129f010a1153657444656661756c7456657273696f6e122c2e67" .
            "6f6f676c652e636c6f75642e6d6c2e76312e53657444656661756c745665" .
            "7273696f6e526571756573741a1b2e676f6f676c652e636c6f75642e6d6c" .
            "2e76312e56657273696f6e223f82d3e493023922342f76312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6d6f64656c732f2a2f76657273696f6e732f" .
            "2a7d3a73657444656661756c743a012a42670a1a636f6d2e676f6f676c65" .
            "2e636c6f75642e6d6c2e6170692e763142114d6f64656c53657276696365" .
            "50726f746f50015a34676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f6d6c2f76313b6d" .
            "6c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

