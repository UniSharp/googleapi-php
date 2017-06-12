<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1beta1/model_service.proto

namespace GPBMetadata\Google\Cloud\Ml\V1Beta1;

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
            "0abf160a2b676f6f676c652f636c6f75642f6d6c2f763162657461312f6d" .
            "6f64656c5f736572766963652e70726f746f1217676f6f676c652e636c6f" .
            "75642e6d6c2e763162657461311a1c676f6f676c652f6170692f616e6e6f" .
            "746174696f6e732e70726f746f1a15676f6f676c652f6170692f61757468" .
            "2e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065" .
            "726174696f6e732e70726f746f1a1f676f6f676c652f70726f746f627566" .
            "2f74696d657374616d702e70726f746f2299010a054d6f64656c120c0a04" .
            "6e616d6518012001280912130a0b6465736372697074696f6e1802200128" .
            "0912390a0f64656661756c745f76657273696f6e18032001280b32202e67" .
            "6f6f676c652e636c6f75642e6d6c2e763162657461312e56657273696f6e" .
            "120f0a07726567696f6e7318042003280912210a196f6e6c696e655f7072" .
            "6564696374696f6e5f6c6f6767696e671805200128082295020a07566572" .
            "73696f6e120c0a046e616d6518012001280912130a0b6465736372697074" .
            "696f6e18022001280912120a0a69735f64656661756c7418032001280812" .
            "160a0e6465706c6f796d656e745f757269180420012809122f0a0b637265" .
            "6174655f74696d6518052001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7012310a0d6c6173745f7573655f74696d6518" .
            "062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7012170a0f72756e74696d655f76657273696f6e180820012809123e" .
            "0a0e6d616e75616c5f7363616c696e6718092001280b32262e676f6f676c" .
            "652e636c6f75642e6d6c2e763162657461312e4d616e75616c5363616c69" .
            "6e67221e0a0d4d616e75616c5363616c696e67120d0a056e6f6465731801" .
            "2001280522530a124372656174654d6f64656c52657175657374120e0a06" .
            "706172656e74180120012809122d0a056d6f64656c18022001280b321e2e" .
            "676f6f676c652e636c6f75642e6d6c2e763162657461312e4d6f64656c22" .
            "4a0a114c6973744d6f64656c7352657175657374120e0a06706172656e74" .
            "18012001280912120a0a706167655f746f6b656e18042001280912110a09" .
            "706167655f73697a65180520012805225d0a124c6973744d6f64656c7352" .
            "6573706f6e7365122e0a066d6f64656c7318012003280b321e2e676f6f67" .
            "6c652e636c6f75642e6d6c2e763162657461312e4d6f64656c12170a0f6e" .
            "6578745f706167655f746f6b656e180220012809221f0a0f4765744d6f64" .
            "656c52657175657374120c0a046e616d6518012001280922220a1244656c" .
            "6574654d6f64656c52657175657374120c0a046e616d6518012001280922" .
            "590a1443726561746556657273696f6e52657175657374120e0a06706172" .
            "656e7418012001280912310a0776657273696f6e18022001280b32202e67" .
            "6f6f676c652e636c6f75642e6d6c2e763162657461312e56657273696f6e" .
            "224c0a134c69737456657273696f6e7352657175657374120e0a06706172" .
            "656e7418012001280912120a0a706167655f746f6b656e18042001280912" .
            "110a09706167655f73697a6518052001280522630a144c69737456657273" .
            "696f6e73526573706f6e736512320a0876657273696f6e7318012003280b" .
            "32202e676f6f676c652e636c6f75642e6d6c2e763162657461312e566572" .
            "73696f6e12170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "210a1147657456657273696f6e52657175657374120c0a046e616d651801" .
            "2001280922240a1444656c65746556657273696f6e52657175657374120c" .
            "0a046e616d6518012001280922280a1853657444656661756c7456657273" .
            "696f6e52657175657374120c0a046e616d6518012001280932e60a0a0c4d" .
            "6f64656c53657276696365128e010a0b4372656174654d6f64656c122b2e" .
            "676f6f676c652e636c6f75642e6d6c2e763162657461312e437265617465" .
            "4d6f64656c526571756573741a1e2e676f6f676c652e636c6f75642e6d6c" .
            "2e763162657461312e4d6f64656c223282d3e493022c22232f7631626574" .
            "61312f7b706172656e743d70726f6a656374732f2a7d2f6d6f64656c733a" .
            "056d6f64656c1292010a0a4c6973744d6f64656c73122a2e676f6f676c65" .
            "2e636c6f75642e6d6c2e763162657461312e4c6973744d6f64656c735265" .
            "71756573741a2b2e676f6f676c652e636c6f75642e6d6c2e763162657461" .
            "312e4c6973744d6f64656c73526573706f6e7365222b82d3e49302251223" .
            "2f763162657461312f7b706172656e743d70726f6a656374732f2a7d2f6d" .
            "6f64656c731281010a084765744d6f64656c12282e676f6f676c652e636c" .
            "6f75642e6d6c2e763162657461312e4765744d6f64656c52657175657374" .
            "1a1e2e676f6f676c652e636c6f75642e6d6c2e763162657461312e4d6f64" .
            "656c222b82d3e493022512232f763162657461312f7b6e616d653d70726f" .
            "6a656374732f2a2f6d6f64656c732f2a7d1286010a0b44656c6574654d6f" .
            "64656c122b2e676f6f676c652e636c6f75642e6d6c2e763162657461312e" .
            "44656c6574654d6f64656c526571756573741a1d2e676f6f676c652e6c6f" .
            "6e6772756e6e696e672e4f7065726174696f6e222b82d3e49302252a232f" .
            "763162657461312f7b6e616d653d70726f6a656374732f2a2f6d6f64656c" .
            "732f2a7d129e010a0d43726561746556657273696f6e122d2e676f6f676c" .
            "652e636c6f75642e6d6c2e763162657461312e4372656174655665727369" .
            "6f6e526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e67" .
            "2e4f7065726174696f6e223f82d3e4930239222e2f763162657461312f7b" .
            "706172656e743d70726f6a656374732f2a2f6d6f64656c732f2a7d2f7665" .
            "7273696f6e733a0776657273696f6e12a3010a0c4c69737456657273696f" .
            "6e73122c2e676f6f676c652e636c6f75642e6d6c2e763162657461312e4c" .
            "69737456657273696f6e73526571756573741a2d2e676f6f676c652e636c" .
            "6f75642e6d6c2e763162657461312e4c69737456657273696f6e73526573" .
            "706f6e7365223682d3e4930230122e2f763162657461312f7b706172656e" .
            "743d70726f6a656374732f2a2f6d6f64656c732f2a7d2f76657273696f6e" .
            "731292010a0a47657456657273696f6e122a2e676f6f676c652e636c6f75" .
            "642e6d6c2e763162657461312e47657456657273696f6e52657175657374" .
            "1a202e676f6f676c652e636c6f75642e6d6c2e763162657461312e566572" .
            "73696f6e223682d3e4930230122e2f763162657461312f7b6e616d653d70" .
            "726f6a656374732f2a2f6d6f64656c732f2a2f76657273696f6e732f2a7d" .
            "1295010a0d44656c65746556657273696f6e122d2e676f6f676c652e636c" .
            "6f75642e6d6c2e763162657461312e44656c65746556657273696f6e5265" .
            "71756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065" .
            "726174696f6e223682d3e49302302a2e2f763162657461312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6d6f64656c732f2a2f76657273696f6e732f" .
            "2a7d12ae010a1153657444656661756c7456657273696f6e12312e676f6f" .
            "676c652e636c6f75642e6d6c2e763162657461312e53657444656661756c" .
            "7456657273696f6e526571756573741a202e676f6f676c652e636c6f7564" .
            "2e6d6c2e763162657461312e56657273696f6e224482d3e493023e22392f" .
            "763162657461312f7b6e616d653d70726f6a656374732f2a2f6d6f64656c" .
            "732f2a2f76657273696f6e732f2a7d3a73657444656661756c743a012a42" .
            "710a1f636f6d2e676f6f676c652e636c6f75642e6d6c2e6170692e763162" .
            "6574613142114d6f64656c5365727669636550726f746f50015a39676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f636c6f75642f6d6c2f763162657461313b6d6c620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}
