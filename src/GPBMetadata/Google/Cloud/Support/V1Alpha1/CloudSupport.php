<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace GPBMetadata\Google\Cloud\Support\V1Alpha1;

class CloudSupport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Support\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac9150a31676f6f676c652f636c6f75642f737570706f72742f7631616c" .
            "706861312f636c6f75645f737570706f72742e70726f746f121d676f6f67" .
            "6c652e636c6f75642e737570706f72742e7631616c706861311a1c676f6f" .
            "676c652f6170692f616e6e6f746174696f6e732e70726f746f1a21676f6f" .
            "676c652f636c6f75642f737570706f72742f636f6d6d6f6e2e70726f746f" .
            "1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a" .
            "20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e7072" .
            "6f746f22280a18476574537570706f72744163636f756e74526571756573" .
            "74120c0a046e616d6518012001280922530a1a4c697374537570706f7274" .
            "4163636f756e747352657175657374120e0a0666696c7465721801200128" .
            "0912110a09706167655f73697a6518022001280312120a0a706167655f74" .
            "6f6b656e18032001280922750a1b4c697374537570706f72744163636f75" .
            "6e7473526573706f6e7365123d0a086163636f756e747318012003280b32" .
            "2b2e676f6f676c652e636c6f75642e737570706f72742e636f6d6d6f6e2e" .
            "537570706f72744163636f756e7412170a0f6e6578745f706167655f746f" .
            "6b656e180220012809221e0a0e4765744361736552657175657374120c0a" .
            "046e616d6518012001280922570a104c6973744361736573526571756573" .
            "74120c0a046e616d65180120012809120e0a0666696c7465721802200128" .
            "0912110a09706167655f73697a6518032001280312120a0a706167655f74" .
            "6f6b656e180420012809225e0a114c6973744361736573526573706f6e73" .
            "6512300a05636173657318012003280b32212e676f6f676c652e636c6f75" .
            "642e737570706f72742e636f6d6d6f6e2e4361736512170a0f6e6578745f" .
            "706167655f746f6b656e18022001280922230a134c697374436f6d6d656e" .
            "747352657175657374120c0a046e616d65180120012809224e0a144c6973" .
            "74436f6d6d656e7473526573706f6e736512360a08636f6d6d656e747318" .
            "012003280b32242e676f6f676c652e636c6f75642e737570706f72742e63" .
            "6f6d6d6f6e2e436f6d6d656e7422540a1143726561746543617365526571" .
            "75657374120e0a06706172656e74180120012809122f0a04636173651802" .
            "2001280b32212e676f6f676c652e636c6f75642e737570706f72742e636f" .
            "6d6d6f6e2e4361736522750a115570646174654361736552657175657374" .
            "122f0a046361736518012001280b32212e676f6f676c652e636c6f75642e" .
            "737570706f72742e636f6d6d6f6e2e43617365122f0a0b7570646174655f" .
            "6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e46" .
            "69656c644d61736b225b0a14437265617465436f6d6d656e745265717565" .
            "7374120c0a046e616d6518012001280912350a07636f6d6d656e74180220" .
            "01280b32242e676f6f676c652e636c6f75642e737570706f72742e636f6d" .
            "6d6f6e2e436f6d6d656e7422190a1747657449737375655461786f6e6f6d" .
            "795265717565737432e50b0a0c436c6f7564537570706f727412a5010a11" .
            "476574537570706f72744163636f756e7412372e676f6f676c652e636c6f" .
            "75642e737570706f72742e7631616c706861312e476574537570706f7274" .
            "4163636f756e74526571756573741a2b2e676f6f676c652e636c6f75642e" .
            "737570706f72742e636f6d6d6f6e2e537570706f72744163636f756e7422" .
            "2a82d3e493022412222f7631616c706861312f7b6e616d653d737570706f" .
            "72744163636f756e74732f2a7d12af010a134c697374537570706f727441" .
            "63636f756e747312392e676f6f676c652e636c6f75642e737570706f7274" .
            "2e7631616c706861312e4c697374537570706f72744163636f756e747352" .
            "6571756573741a3a2e676f6f676c652e636c6f75642e737570706f72742e" .
            "7631616c706861312e4c697374537570706f72744163636f756e74735265" .
            "73706f6e7365222182d3e493021b12192f7631616c706861312f73757070" .
            "6f72744163636f756e7473128f010a0747657443617365122d2e676f6f67" .
            "6c652e636c6f75642e737570706f72742e7631616c706861312e47657443" .
            "617365526571756573741a212e676f6f676c652e636c6f75642e73757070" .
            "6f72742e636f6d6d6f6e2e43617365223282d3e493022c122a2f7631616c" .
            "706861312f7b6e616d653d737570706f72744163636f756e74732f2a2f63" .
            "617365732f2a7d12a0010a094c6973744361736573122f2e676f6f676c65" .
            "2e636c6f75642e737570706f72742e7631616c706861312e4c6973744361" .
            "736573526571756573741a302e676f6f676c652e636c6f75642e73757070" .
            "6f72742e7631616c706861312e4c6973744361736573526573706f6e7365" .
            "223082d3e493022a12282f7631616c706861312f7b6e616d653d73757070" .
            "6f72744163636f756e74732f2a7d2f636173657312b4010a0c4c69737443" .
            "6f6d6d656e747312322e676f6f676c652e636c6f75642e737570706f7274" .
            "2e7631616c706861312e4c697374436f6d6d656e7473526571756573741a" .
            "332e676f6f676c652e636c6f75642e737570706f72742e7631616c706861" .
            "312e4c697374436f6d6d656e7473526573706f6e7365223b82d3e4930235" .
            "12332f7631616c706861312f7b6e616d653d737570706f72744163636f75" .
            "6e74732f2a2f63617365732f2a7d2f636f6d6d656e7473129b010a0a4372" .
            "656174654361736512302e676f6f676c652e636c6f75642e737570706f72" .
            "742e7631616c706861312e43726561746543617365526571756573741a21" .
            "2e676f6f676c652e636c6f75642e737570706f72742e636f6d6d6f6e2e43" .
            "617365223882d3e4930232222a2f7631616c706861312f7b706172656e74" .
            "3d737570706f72744163636f756e74732f2a7d2f63617365733a04636173" .
            "6512a0010a0a5570646174654361736512302e676f6f676c652e636c6f75" .
            "642e737570706f72742e7631616c706861312e5570646174654361736552" .
            "6571756573741a212e676f6f676c652e636c6f75642e737570706f72742e" .
            "636f6d6d6f6e2e43617365223d82d3e4930237322f2f7631616c70686131" .
            "2f7b636173652e6e616d653d737570706f72744163636f756e74732f2a2f" .
            "63617365732f2a7d3a046361736512b0010a0d437265617465436f6d6d65" .
            "6e7412332e676f6f676c652e636c6f75642e737570706f72742e7631616c" .
            "706861312e437265617465436f6d6d656e74526571756573741a242e676f" .
            "6f676c652e636c6f75642e737570706f72742e636f6d6d6f6e2e436f6d6d" .
            "656e74224482d3e493023e22332f7631616c706861312f7b6e616d653d73" .
            "7570706f72744163636f756e74732f2a2f63617365732f2a7d2f636f6d6d" .
            "656e74733a07636f6d6d656e74129a010a1047657449737375655461786f" .
            "6e6f6d7912362e676f6f676c652e636c6f75642e737570706f72742e7631" .
            "616c706861312e47657449737375655461786f6e6f6d7952657175657374" .
            "1a2a2e676f6f676c652e636c6f75642e737570706f72742e636f6d6d6f6e" .
            "2e49737375655461786f6e6f6d79222282d3e493021c121a2f7631616c70" .
            "6861313a67657449737375655461786f6e6f6d79427c0a21636f6d2e676f" .
            "6f676c652e636c6f75642e737570706f72742e7631616c70686131421143" .
            "6c6f7564537570706f727450726f746f5a44676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75" .
            "642f737570706f72742f7631616c706861313b737570706f727462067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}
