<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace GPBMetadata\Google\Logging\V2;

class LoggingMetrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Distribution::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee0c0a27676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
            "5f6d6574726963732e70726f746f1211676f6f676c652e6c6f6767696e67" .
            "2e76321a1c676f6f676c652f6170692f616e6e6f746174696f6e732e7072" .
            "6f746f1a1d676f6f676c652f6170692f646973747269627574696f6e2e70" .
            "726f746f1a17676f6f676c652f6170692f6d65747269632e70726f746f1a" .
            "1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f2296" .
            "010a094c6f674d6574726963120c0a046e616d6518012001280912130a0b" .
            "6465736372697074696f6e180220012809120e0a0666696c746572180320" .
            "01280912380a0776657273696f6e18042001280e32272e676f6f676c652e" .
            "6c6f6767696e672e76322e4c6f674d65747269632e41706956657273696f" .
            "6e221c0a0a41706956657273696f6e12060a025632100012060a02563110" .
            "01224e0a154c6973744c6f674d65747269637352657175657374120e0a06" .
            "706172656e7418012001280912120a0a706167655f746f6b656e18022001" .
            "280912110a09706167655f73697a6518032001280522600a164c6973744c" .
            "6f674d657472696373526573706f6e7365122d0a076d6574726963731801" .
            "2003280b321c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d65" .
            "7472696312170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "2a0a134765744c6f674d65747269635265717565737412130a0b6d657472" .
            "69635f6e616d6518012001280922560a164372656174654c6f674d657472" .
            "696352657175657374120e0a06706172656e74180120012809122c0a066d" .
            "657472696318022001280b321c2e676f6f676c652e6c6f6767696e672e76" .
            "322e4c6f674d6574726963225b0a165570646174654c6f674d6574726963" .
            "5265717565737412130a0b6d65747269635f6e616d65180120012809122c" .
            "0a066d657472696318022001280b321c2e676f6f676c652e6c6f6767696e" .
            "672e76322e4c6f674d6574726963222d0a1644656c6574654c6f674d6574" .
            "7269635265717565737412130a0b6d65747269635f6e616d651801200128" .
            "0932d4050a104d657472696373536572766963655632128e010a0e4c6973" .
            "744c6f674d65747269637312282e676f6f676c652e6c6f6767696e672e76" .
            "322e4c6973744c6f674d657472696373526571756573741a292e676f6f67" .
            "6c652e6c6f6767696e672e76322e4c6973744c6f674d6574726963735265" .
            "73706f6e7365222782d3e4930221121f2f76322f7b706172656e743d7072" .
            "6f6a656374732f2a7d2f6d6574726963731284010a0c4765744c6f674d65" .
            "7472696312262e676f6f676c652e6c6f6767696e672e76322e4765744c6f" .
            "674d6574726963526571756573741a1c2e676f6f676c652e6c6f6767696e" .
            "672e76322e4c6f674d6574726963222e82d3e493022812262f76322f7b6d" .
            "65747269635f6e616d653d70726f6a656374732f2a2f6d6574726963732f" .
            "2a7d128b010a0f4372656174654c6f674d657472696312292e676f6f676c" .
            "652e6c6f6767696e672e76322e4372656174654c6f674d65747269635265" .
            "71756573741a1c2e676f6f676c652e6c6f6767696e672e76322e4c6f674d" .
            "6574726963222f82d3e4930229221f2f76322f7b706172656e743d70726f" .
            "6a656374732f2a7d2f6d6574726963733a066d65747269631292010a0f55" .
            "70646174654c6f674d657472696312292e676f6f676c652e6c6f6767696e" .
            "672e76322e5570646174654c6f674d6574726963526571756573741a1c2e" .
            "676f6f676c652e6c6f6767696e672e76322e4c6f674d6574726963223682" .
            "d3e49302301a262f76322f7b6d65747269635f6e616d653d70726f6a6563" .
            "74732f2a2f6d6574726963732f2a7d3a066d65747269631284010a0f4465" .
            "6c6574654c6f674d657472696312292e676f6f676c652e6c6f6767696e67" .
            "2e76322e44656c6574654c6f674d6574726963526571756573741a162e67" .
            "6f6f676c652e70726f746f6275662e456d707479222e82d3e49302282a26" .
            "2f76322f7b6d65747269635f6e616d653d70726f6a656374732f2a2f6d65" .
            "74726963732f2a7d4282010a15636f6d2e676f6f676c652e6c6f6767696e" .
            "672e763242134c6f6767696e674d65747269637350726f746f50015a3867" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f6c6f6767696e672f76323b6c6f6767696e67aa0217476f" .
            "6f676c652e436c6f75642e4c6f6767696e672e5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

