<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace GPBMetadata\Google\Genomics\V1Alpha2;

class Pipelines
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Code::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad6270a28676f6f676c652f67656e6f6d6963732f7631616c706861322f" .
            "706970656c696e65732e70726f746f1218676f6f676c652e67656e6f6d69" .
            "63732e7631616c706861321a23676f6f676c652f6c6f6e6772756e6e696e" .
            "672f6f7065726174696f6e732e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70" .
            "726f746f6275662f656d7074792e70726f746f1a1f676f6f676c652f7072" .
            "6f746f6275662f74696d657374616d702e70726f746f1a15676f6f676c65" .
            "2f7270632f636f64652e70726f746f225e0a0d436f6d70757465456e6769" .
            "6e6512150a0d696e7374616e63655f6e616d65180120012809120c0a047a" .
            "6f6e6518022001280912140a0c6d616368696e655f747970651803200128" .
            "0912120a0a6469736b5f6e616d657318042003280922520a0f52756e7469" .
            "6d654d65746164617461123f0a0e636f6d707574655f656e67696e651801" .
            "2001280b32272e676f6f676c652e67656e6f6d6963732e7631616c706861" .
            "322e436f6d70757465456e67696e6522ed020a08506970656c696e651212" .
            "0a0a70726f6a6563745f6964180120012809120c0a046e616d6518022001" .
            "280912130a0b6465736372697074696f6e18032001280912450a10696e70" .
            "75745f706172616d657465727318082003280b322b2e676f6f676c652e67" .
            "656e6f6d6963732e7631616c706861322e506970656c696e65506172616d" .
            "6574657212460a116f75747075745f706172616d65746572731809200328" .
            "0b322b2e676f6f676c652e67656e6f6d6963732e7631616c706861322e50" .
            "6970656c696e65506172616d65746572123a0a06646f636b657218052001" .
            "280b32282e676f6f676c652e67656e6f6d6963732e7631616c706861322e" .
            "446f636b65724578656375746f724800123e0a097265736f757263657318" .
            "062001280b322b2e676f6f676c652e67656e6f6d6963732e7631616c7068" .
            "61322e506970656c696e655265736f757263657312130a0b706970656c69" .
            "6e655f6964180720012809420a0a086578656375746f72224d0a15437265" .
            "617465506970656c696e655265717565737412340a08706970656c696e65" .
            "18012001280b32222e676f6f676c652e67656e6f6d6963732e7631616c70" .
            "6861322e506970656c696e6522a1050a0f52756e506970656c696e654172" .
            "677312120a0a70726f6a6563745f696418012001280912450a06696e7075" .
            "747318022003280b32352e676f6f676c652e67656e6f6d6963732e763161" .
            "6c706861322e52756e506970656c696e65417267732e496e70757473456e" .
            "74727912470a076f75747075747318032003280b32362e676f6f676c652e" .
            "67656e6f6d6963732e7631616c706861322e52756e506970656c696e6541" .
            "7267732e4f757470757473456e74727912410a0f736572766963655f6163" .
            "636f756e7418042001280b32282e676f6f676c652e67656e6f6d6963732e" .
            "7631616c706861322e536572766963654163636f756e7412110a09636c69" .
            "656e745f6964180520012809123e0a097265736f75726365731806200128" .
            "0b322b2e676f6f676c652e67656e6f6d6963732e7631616c706861322e50" .
            "6970656c696e655265736f757263657312390a076c6f6767696e67180720" .
            "01280b32282e676f6f676c652e67656e6f6d6963732e7631616c70686132" .
            "2e4c6f6767696e674f7074696f6e7312440a216b6565705f766d5f616c69" .
            "76655f6f6e5f6661696c7572655f6475726174696f6e18082001280b3219" .
            "2e676f6f676c652e70726f746f6275662e4475726174696f6e12450a066c" .
            "6162656c7318092003280b32352e676f6f676c652e67656e6f6d6963732e" .
            "7631616c706861322e52756e506970656c696e65417267732e4c6162656c" .
            "73456e7472791a2d0a0b496e70757473456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a0238011a2e0a0c4f7574" .
            "70757473456e747279120b0a036b6579180120012809120d0a0576616c75" .
            "651802200128093a0238011a2d0a0b4c6162656c73456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a02380122bb" .
            "010a1252756e506970656c696e655265717565737412150a0b706970656c" .
            "696e655f6964180120012809480012400a12657068656d6572616c5f7069" .
            "70656c696e6518022001280b32222e676f6f676c652e67656e6f6d696373" .
            "2e7631616c706861322e506970656c696e65480012400a0d706970656c69" .
            "6e655f6172677318032001280b32292e676f6f676c652e67656e6f6d6963" .
            "732e7631616c706861322e52756e506970656c696e6541726773420a0a08" .
            "706970656c696e6522290a12476574506970656c696e6552657175657374" .
            "12130a0b706970656c696e655f696418012001280922660a144c69737450" .
            "6970656c696e65735265717565737412120a0a70726f6a6563745f696418" .
            "012001280912130a0b6e616d655f70726566697818022001280912110a09" .
            "706167655f73697a6518032001280512120a0a706167655f746f6b656e18" .
            "042001280922670a154c697374506970656c696e6573526573706f6e7365" .
            "12350a09706970656c696e657318012003280b32222e676f6f676c652e67" .
            "656e6f6d6963732e7631616c706861322e506970656c696e6512170a0f6e" .
            "6578745f706167655f746f6b656e180220012809222c0a1544656c657465" .
            "506970656c696e655265717565737412130a0b706970656c696e655f6964" .
            "180120012809224c0a1a476574436f6e74726f6c6c6572436f6e66696752" .
            "65717565737412140a0c6f7065726174696f6e5f69641801200128091218" .
            "0a1076616c69646174696f6e5f746f6b656e18022001280422d9050a1043" .
            "6f6e74726f6c6c6572436f6e666967120d0a05696d616765180120012809" .
            "120b0a03636d6418022001280912140a0c6763735f6c6f675f7061746818" .
            "032001280912140a0c6d616368696e655f7479706518042001280912420a" .
            "047661727318052003280b32342e676f6f676c652e67656e6f6d6963732e" .
            "7631616c706861322e436f6e74726f6c6c6572436f6e6669672e56617273" .
            "456e74727912440a056469736b7318062003280b32352e676f6f676c652e" .
            "67656e6f6d6963732e7631616c706861322e436f6e74726f6c6c6572436f" .
            "6e6669672e4469736b73456e747279124f0a0b6763735f736f7572636573" .
            "18072003280b323a2e676f6f676c652e67656e6f6d6963732e7631616c70" .
            "6861322e436f6e74726f6c6c6572436f6e6669672e476373536f75726365" .
            "73456e747279124b0a096763735f73696e6b7318082003280b32382e676f" .
            "6f676c652e67656e6f6d6963732e7631616c706861322e436f6e74726f6c" .
            "6c6572436f6e6669672e47637353696e6b73456e7472791a200a0e526570" .
            "6561746564537472696e67120e0a0676616c7565731801200328091a2b0a" .
            "0956617273456e747279120b0a036b6579180120012809120d0a0576616c" .
            "75651802200128093a0238011a2c0a0a4469736b73456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a0238011a6c" .
            "0a0f476373536f7572636573456e747279120b0a036b6579180120012809" .
            "12480a0576616c756518022001280b32392e676f6f676c652e67656e6f6d" .
            "6963732e7631616c706861322e436f6e74726f6c6c6572436f6e6669672e" .
            "5265706561746564537472696e673a0238011a6a0a0d47637353696e6b73" .
            "456e747279120b0a036b657918012001280912480a0576616c7565180220" .
            "01280b32392e676f6f676c652e67656e6f6d6963732e7631616c70686132" .
            "2e436f6e74726f6c6c6572436f6e6669672e526570656174656453747269" .
            "6e673a02380122540a0e54696d657374616d704576656e7412130a0b6465" .
            "736372697074696f6e180120012809122d0a0974696d657374616d701802" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d7022cc010a195365744f7065726174696f6e5374617475735265717565" .
            "737412140a0c6f7065726174696f6e5f696418012001280912420a107469" .
            "6d657374616d705f6576656e747318022003280b32282e676f6f676c652e" .
            "67656e6f6d6963732e7631616c706861322e54696d657374616d70457665" .
            "6e7412240a0a6572726f725f636f646518032001280e32102e676f6f676c" .
            "652e7270632e436f646512150a0d6572726f725f6d657373616765180420" .
            "01280912180a1076616c69646174696f6e5f746f6b656e18052001280422" .
            "2f0a0e536572766963654163636f756e74120d0a05656d61696c18012001" .
            "2809120e0a0673636f70657318022003280922220a0e4c6f6767696e674f" .
            "7074696f6e7312100a086763735f7061746818012001280922d6030a1150" .
            "6970656c696e655265736f757263657312190a116d696e696d756d5f6370" .
            "755f636f72657318012001280512130a0b707265656d707469626c651802" .
            "2001280812160a0e6d696e696d756d5f72616d5f6762180320012801123f" .
            "0a056469736b7318042003280b32302e676f6f676c652e67656e6f6d6963" .
            "732e7631616c706861322e506970656c696e655265736f75726365732e44" .
            "69736b120d0a057a6f6e657318052003280912190a11626f6f745f646973" .
            "6b5f73697a655f676218062001280512120a0a6e6f5f6164647265737318" .
            "07200128081af9010a044469736b120c0a046e616d651801200128091243" .
            "0a047479706518022001280e32352e676f6f676c652e67656e6f6d696373" .
            "2e7631616c706861322e506970656c696e655265736f75726365732e4469" .
            "736b2e54797065120f0a0773697a655f6762180320012805120e0a06736f" .
            "7572636518042001280912130a0b6175746f5f64656c6574651806200128" .
            "0812130a0b6d6f756e745f706f696e7418082001280922530a0454797065" .
            "12140a10545950455f554e535045434946494544100012120a0e50455253" .
            "495354454e545f484444100112120a0e50455253495354454e545f535344" .
            "1002120d0a094c4f43414c5f535344100322c1010a11506970656c696e65" .
            "506172616d65746572120c0a046e616d6518012001280912130a0b646573" .
            "6372697074696f6e18022001280912150a0d64656661756c745f76616c75" .
            "6518052001280912490a0a6c6f63616c5f636f707918062001280b32352e" .
            "676f6f676c652e67656e6f6d6963732e7631616c706861322e506970656c" .
            "696e65506172616d657465722e4c6f63616c436f70791a270a094c6f6361" .
            "6c436f7079120c0a0470617468180120012809120c0a046469736b180220" .
            "01280922310a0e446f636b65724578656375746f7212120a0a696d616765" .
            "5f6e616d65180120012809120b0a03636d641802200128093288080a1150" .
            "6970656c696e65735631416c70686132128c010a0e437265617465506970" .
            "656c696e65122f2e676f6f676c652e67656e6f6d6963732e7631616c7068" .
            "61322e437265617465506970656c696e65526571756573741a222e676f6f" .
            "676c652e67656e6f6d6963732e7631616c706861322e506970656c696e65" .
            "222582d3e493021f22132f7631616c706861322f706970656c696e65733a" .
            "08706970656c696e65127e0a0b52756e506970656c696e65122c2e676f6f" .
            "676c652e67656e6f6d6963732e7631616c706861322e52756e506970656c" .
            "696e65526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e" .
            "672e4f7065726174696f6e222282d3e493021c22172f7631616c70686132" .
            "2f706970656c696e65733a72756e3a012a128a010a0b476574506970656c" .
            "696e65122c2e676f6f676c652e67656e6f6d6963732e7631616c70686132" .
            "2e476574506970656c696e65526571756573741a222e676f6f676c652e67" .
            "656e6f6d6963732e7631616c706861322e506970656c696e65222982d3e4" .
            "93022312212f7631616c706861322f706970656c696e65732f7b70697065" .
            "6c696e655f69647d128d010a0d4c697374506970656c696e6573122e2e67" .
            "6f6f676c652e67656e6f6d6963732e7631616c706861322e4c6973745069" .
            "70656c696e6573526571756573741a2f2e676f6f676c652e67656e6f6d69" .
            "63732e7631616c706861322e4c697374506970656c696e6573526573706f" .
            "6e7365221b82d3e493021512132f7631616c706861322f706970656c696e" .
            "65731284010a0e44656c657465506970656c696e65122f2e676f6f676c65" .
            "2e67656e6f6d6963732e7631616c706861322e44656c657465506970656c" .
            "696e65526571756573741a162e676f6f676c652e70726f746f6275662e45" .
            "6d707479222982d3e49302232a212f7631616c706861322f706970656c69" .
            "6e65732f7b706970656c696e655f69647d12a8010a13476574436f6e7472" .
            "6f6c6c6572436f6e66696712342e676f6f676c652e67656e6f6d6963732e" .
            "7631616c706861322e476574436f6e74726f6c6c6572436f6e6669675265" .
            "71756573741a2a2e676f6f676c652e67656e6f6d6963732e7631616c7068" .
            "61322e436f6e74726f6c6c6572436f6e666967222f82d3e493022912272f" .
            "7631616c706861322f706970656c696e65733a676574436f6e74726f6c6c" .
            "6572436f6e6669671294010a125365744f7065726174696f6e5374617475" .
            "7312332e676f6f676c652e67656e6f6d6963732e7631616c706861322e53" .
            "65744f7065726174696f6e537461747573526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479223182d3e493022b1a262f76" .
            "31616c706861322f706970656c696e65733a7365744f7065726174696f6e" .
            "5374617475733a012a42700a17636f6d2e676f6f676c652e67656e6f6d69" .
            "63732e763161420e506970656c696e657350726f746f50015a40676f6f67" .
            "6c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561" .
            "7069732f67656e6f6d6963732f7631616c706861323b67656e6f6d696373" .
            "f80101620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

