<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace GPBMetadata\Google\Container\V1;

class ClusterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a964f0a29676f6f676c652f636f6e7461696e65722f76312f636c757374" .
            "65725f736572766963652e70726f746f1213676f6f676c652e636f6e7461" .
            "696e65722e76311a1b676f6f676c652f70726f746f6275662f656d707479" .
            "2e70726f746f2295030a0a4e6f6465436f6e66696712140a0c6d61636869" .
            "6e655f7479706518012001280912140a0c6469736b5f73697a655f676218" .
            "022001280512140a0c6f617574685f73636f70657318032003280912170a" .
            "0f736572766963655f6163636f756e74180920012809123f0a086d657461" .
            "6461746118042003280b322d2e676f6f676c652e636f6e7461696e65722e" .
            "76312e4e6f6465436f6e6669672e4d65746164617461456e74727912120a" .
            "0a696d6167655f74797065180520012809123b0a066c6162656c73180620" .
            "03280b322b2e676f6f676c652e636f6e7461696e65722e76312e4e6f6465" .
            "436f6e6669672e4c6162656c73456e74727912170a0f6c6f63616c5f7373" .
            "645f636f756e74180720012805120c0a047461677318082003280912130a" .
            "0b707265656d707469626c65180a200128081a2f0a0d4d65746164617461" .
            "456e747279120b0a036b6579180120012809120d0a0576616c7565180220" .
            "0128093a0238011a2d0a0b4c6162656c73456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a0238012280010a0a4d" .
            "61737465724175746812100a08757365726e616d6518012001280912100a" .
            "0870617373776f7264180220012809121e0a16636c75737465725f63615f" .
            "6365727469666963617465186420012809121a0a12636c69656e745f6365" .
            "72746966696361746518652001280912120a0a636c69656e745f6b657918" .
            "662001280922a6010a0c4164646f6e73436f6e66696712430a1368747470" .
            "5f6c6f61645f62616c616e63696e6718012001280b32262e676f6f676c65" .
            "2e636f6e7461696e65722e76312e487474704c6f616442616c616e63696e" .
            "6712510a1a686f72697a6f6e74616c5f706f645f6175746f7363616c696e" .
            "6718022001280b322d2e676f6f676c652e636f6e7461696e65722e76312e" .
            "486f72697a6f6e74616c506f644175746f7363616c696e6722250a114874" .
            "74704c6f616442616c616e63696e6712100a0864697361626c6564180120" .
            "012808222c0a18486f72697a6f6e74616c506f644175746f7363616c696e" .
            "6712100a0864697361626c6564180120012808221d0a0a4c656761637941" .
            "626163120f0a07656e61626c65641801200128082283090a07436c757374" .
            "6572120c0a046e616d6518012001280912130a0b6465736372697074696f" .
            "6e180220012809121a0a12696e697469616c5f6e6f64655f636f756e7418" .
            "032001280512340a0b6e6f64655f636f6e66696718042001280b321f2e67" .
            "6f6f676c652e636f6e7461696e65722e76312e4e6f6465436f6e66696712" .
            "340a0b6d61737465725f6175746818052001280b321f2e676f6f676c652e" .
            "636f6e7461696e65722e76312e4d61737465724175746812170a0f6c6f67" .
            "67696e675f73657276696365180620012809121a0a126d6f6e69746f7269" .
            "6e675f73657276696365180720012809120f0a076e6574776f726b180820" .
            "01280912190a11636c75737465725f697076345f63696472180920012809" .
            "12380a0d6164646f6e735f636f6e666967180a2001280b32212e676f6f67" .
            "6c652e636f6e7461696e65722e76312e4164646f6e73436f6e6669671212" .
            "0a0a7375626e6574776f726b180b2001280912310a0a6e6f64655f706f6f" .
            "6c73180c2003280b321d2e676f6f676c652e636f6e7461696e65722e7631" .
            "2e4e6f6465506f6f6c12110a096c6f636174696f6e73180d20032809121f" .
            "0a17656e61626c655f6b756265726e657465735f616c706861180e200128" .
            "0812490a0f7265736f757263655f6c6162656c73180f2003280b32302e67" .
            "6f6f676c652e636f6e7461696e65722e76312e436c75737465722e526573" .
            "6f757263654c6162656c73456e74727912190a116c6162656c5f66696e67" .
            "65727072696e7418102001280912340a0b6c65676163795f616261631812" .
            "2001280b321f2e676f6f676c652e636f6e7461696e65722e76312e4c6567" .
            "6163794162616312110a0973656c665f6c696e6b186420012809120c0a04" .
            "7a6f6e6518652001280912100a08656e64706f696e74186620012809121f" .
            "0a17696e697469616c5f636c75737465725f76657273696f6e1867200128" .
            "09121e0a1663757272656e745f6d61737465725f76657273696f6e186820" .
            "012809121c0a1463757272656e745f6e6f64655f76657273696f6e186920" .
            "01280912130a0b6372656174655f74696d65186a2001280912330a067374" .
            "61747573186b2001280e32232e676f6f676c652e636f6e7461696e65722e" .
            "76312e436c75737465722e53746174757312160a0e7374617475735f6d65" .
            "7373616765186c20012809121b0a136e6f64655f697076345f636964725f" .
            "73697a65186d20012805121a0a1273657276696365735f697076345f6369" .
            "6472186e20012809121b0a13696e7374616e63655f67726f75705f75726c" .
            "73186f20032809121a0a1263757272656e745f6e6f64655f636f756e7418" .
            "702001280512130a0b6578706972655f74696d651871200128091a350a13" .
            "5265736f757263654c6162656c73456e747279120b0a036b657918012001" .
            "2809120d0a0576616c75651802200128093a02380122690a065374617475" .
            "7312160a125354415455535f554e535045434946494544100012100a0c50" .
            "524f564953494f4e494e471001120b0a0752554e4e494e471002120f0a0b" .
            "5245434f4e43494c494e471003120c0a0853544f5050494e47100412090a" .
            "054552524f52100522d9020a0d436c7573746572557064617465121c0a14" .
            "646573697265645f6e6f64655f76657273696f6e18042001280912220a1a" .
            "646573697265645f6d6f6e69746f72696e675f7365727669636518052001" .
            "280912400a15646573697265645f6164646f6e735f636f6e666967180620" .
            "01280b32212e676f6f676c652e636f6e7461696e65722e76312e4164646f" .
            "6e73436f6e666967121c0a14646573697265645f6e6f64655f706f6f6c5f" .
            "6964180720012809121a0a12646573697265645f696d6167655f74797065" .
            "180820012809124f0a1d646573697265645f6e6f64655f706f6f6c5f6175" .
            "746f7363616c696e6718092001280b32282e676f6f676c652e636f6e7461" .
            "696e65722e76312e4e6f6465506f6f6c4175746f7363616c696e6712190a" .
            "11646573697265645f6c6f636174696f6e73180a20032809121e0a166465" .
            "73697265645f6d61737465725f76657273696f6e18642001280922f3040a" .
            "094f7065726174696f6e120c0a046e616d65180120012809120c0a047a6f" .
            "6e65180220012809123b0a0e6f7065726174696f6e5f7479706518032001" .
            "280e32232e676f6f676c652e636f6e7461696e65722e76312e4f70657261" .
            "74696f6e2e5479706512350a0673746174757318042001280e32252e676f" .
            "6f676c652e636f6e7461696e65722e76312e4f7065726174696f6e2e5374" .
            "61747573120e0a0664657461696c18082001280912160a0e737461747573" .
            "5f6d65737361676518052001280912110a0973656c665f6c696e6b180620" .
            "01280912130a0b7461726765745f6c696e6b18072001280922520a065374" .
            "6174757312160a125354415455535f554e5350454349464945441000120b" .
            "0a0750454e44494e471001120b0a0752554e4e494e47100212080a04444f" .
            "4e451003120c0a0841424f5254494e47100422b1020a045479706512140a" .
            "10545950455f554e535045434946494544100012120a0e4352454154455f" .
            "434c5553544552100112120a0e44454c4554455f434c5553544552100212" .
            "120a0e555047524144455f4d4153544552100312110a0d55504752414445" .
            "5f4e4f444553100412120a0e5245504149525f434c555354455210051212" .
            "0a0e5550444154455f434c5553544552100612140a104352454154455f4e" .
            "4f44455f504f4f4c100712140a1044454c4554455f4e4f44455f504f4f4c" .
            "1008121c0a185345545f4e4f44455f504f4f4c5f4d414e4147454d454e54" .
            "100912150a114155544f5f5245504149525f4e4f444553100a12160a1241" .
            "55544f5f555047524144455f4e4f444553100b120e0a0a5345545f4c4142" .
            "454c53100c12130a0f5345545f4d41535445525f41555448100d22670a14" .
            "437265617465436c75737465725265717565737412120a0a70726f6a6563" .
            "745f6964180120012809120c0a047a6f6e65180220012809122d0a07636c" .
            "757374657218032001280b321c2e676f6f676c652e636f6e7461696e6572" .
            "2e76312e436c757374657222490a11476574436c75737465725265717565" .
            "737412120a0a70726f6a6563745f6964180120012809120c0a047a6f6e65" .
            "18022001280912120a0a636c75737465725f69641803200128092280010a" .
            "14557064617465436c75737465725265717565737412120a0a70726f6a65" .
            "63745f6964180120012809120c0a047a6f6e6518022001280912120a0a63" .
            "6c75737465725f696418032001280912320a067570646174651804200128" .
            "0b32222e676f6f676c652e636f6e7461696e65722e76312e436c75737465" .
            "7255706461746522ff010a145365744d6173746572417574685265717565" .
            "737412120a0a70726f6a6563745f6964180120012809120c0a047a6f6e65" .
            "18022001280912120a0a636c75737465725f696418032001280912400a06" .
            "616374696f6e18042001280e32302e676f6f676c652e636f6e7461696e65" .
            "722e76312e5365744d617374657241757468526571756573742e41637469" .
            "6f6e122f0a0675706461746518052001280b321f2e676f6f676c652e636f" .
            "6e7461696e65722e76312e4d617374657241757468223e0a06416374696f" .
            "6e120b0a07554e4b4e4f574e100012100a0c5345545f50415353574f5244" .
            "100112150a1147454e45524154455f50415353574f52441002224c0a1444" .
            "656c657465436c75737465725265717565737412120a0a70726f6a656374" .
            "5f6964180120012809120c0a047a6f6e6518022001280912120a0a636c75" .
            "737465725f696418032001280922370a134c697374436c75737465727352" .
            "65717565737412120a0a70726f6a6563745f6964180120012809120c0a04" .
            "7a6f6e65180220012809225d0a144c697374436c75737465727352657370" .
            "6f6e7365122e0a08636c75737465727318012003280b321c2e676f6f676c" .
            "652e636f6e7461696e65722e76312e436c757374657212150a0d6d697373" .
            "696e675f7a6f6e6573180220032809224d0a134765744f7065726174696f" .
            "6e5265717565737412120a0a70726f6a6563745f6964180120012809120c" .
            "0a047a6f6e6518022001280912140a0c6f7065726174696f6e5f69641803" .
            "2001280922390a154c6973744f7065726174696f6e735265717565737412" .
            "120a0a70726f6a6563745f6964180120012809120c0a047a6f6e65180220" .
            "01280922500a1643616e63656c4f7065726174696f6e5265717565737412" .
            "120a0a70726f6a6563745f6964180120012809120c0a047a6f6e65180220" .
            "01280912140a0c6f7065726174696f6e5f696418032001280922630a164c" .
            "6973744f7065726174696f6e73526573706f6e736512320a0a6f70657261" .
            "74696f6e7318012003280b321e2e676f6f676c652e636f6e7461696e6572" .
            "2e76312e4f7065726174696f6e12150a0d6d697373696e675f7a6f6e6573" .
            "180220032809223a0a16476574536572766572436f6e6669675265717565" .
            "737412120a0a70726f6a6563745f6964180120012809120c0a047a6f6e65" .
            "18022001280922a2010a0c536572766572436f6e666967121f0a17646566" .
            "61756c745f636c75737465725f76657273696f6e180120012809121b0a13" .
            "76616c69645f6e6f64655f76657273696f6e73180320032809121a0a1264" .
            "656661756c745f696d6167655f7479706518042001280912190a1176616c" .
            "69645f696d6167655f7479706573180520032809121d0a1576616c69645f" .
            "6d61737465725f76657273696f6e73180620032809227f0a154372656174" .
            "654e6f6465506f6f6c5265717565737412120a0a70726f6a6563745f6964" .
            "180120012809120c0a047a6f6e6518022001280912120a0a636c75737465" .
            "725f696418032001280912300a096e6f64655f706f6f6c18042001280b32" .
            "1d2e676f6f676c652e636f6e7461696e65722e76312e4e6f6465506f6f6c" .
            "22630a1544656c6574654e6f6465506f6f6c5265717565737412120a0a70" .
            "726f6a6563745f6964180120012809120c0a047a6f6e6518022001280912" .
            "120a0a636c75737465725f696418032001280912140a0c6e6f64655f706f" .
            "6f6c5f6964180420012809224c0a144c6973744e6f6465506f6f6c735265" .
            "717565737412120a0a70726f6a6563745f6964180120012809120c0a047a" .
            "6f6e6518022001280912120a0a636c75737465725f696418032001280922" .
            "600a124765744e6f6465506f6f6c5265717565737412120a0a70726f6a65" .
            "63745f6964180120012809120c0a047a6f6e6518022001280912120a0a63" .
            "6c75737465725f696418032001280912140a0c6e6f64655f706f6f6c5f69" .
            "6418042001280922f0030a084e6f6465506f6f6c120c0a046e616d651801" .
            "20012809122f0a06636f6e66696718022001280b321f2e676f6f676c652e" .
            "636f6e7461696e65722e76312e4e6f6465436f6e666967121a0a12696e69" .
            "7469616c5f6e6f64655f636f756e7418032001280512110a0973656c665f" .
            "6c696e6b186420012809120f0a0776657273696f6e186520012809121b0a" .
            "13696e7374616e63655f67726f75705f75726c7318662003280912340a06" .
            "73746174757318672001280e32242e676f6f676c652e636f6e7461696e65" .
            "722e76312e4e6f6465506f6f6c2e53746174757312160a0e737461747573" .
            "5f6d657373616765186820012809123d0a0b6175746f7363616c696e6718" .
            "042001280b32282e676f6f676c652e636f6e7461696e65722e76312e4e6f" .
            "6465506f6f6c4175746f7363616c696e6712370a0a6d616e6167656d656e" .
            "7418052001280b32232e676f6f676c652e636f6e7461696e65722e76312e" .
            "4e6f64654d616e6167656d656e742281010a0653746174757312160a1253" .
            "54415455535f554e535045434946494544100012100a0c50524f56495349" .
            "4f4e494e471001120b0a0752554e4e494e47100212160a1252554e4e494e" .
            "475f574954485f4552524f521003120f0a0b5245434f4e43494c494e4710" .
            "04120c0a0853544f5050494e47100512090a054552524f521006227d0a0e" .
            "4e6f64654d616e6167656d656e7412140a0c6175746f5f75706772616465" .
            "18012001280812130a0b6175746f5f72657061697218022001280812400a" .
            "0f757067726164655f6f7074696f6e73180a2001280b32272e676f6f676c" .
            "652e636f6e7461696e65722e76312e4175746f557067726164654f707469" .
            "6f6e73224a0a124175746f557067726164654f7074696f6e73121f0a1761" .
            "75746f5f757067726164655f73746172745f74696d651801200128091213" .
            "0a0b6465736372697074696f6e18022001280922a3010a1c5365744e6f64" .
            "65506f6f6c4d616e6167656d656e745265717565737412120a0a70726f6a" .
            "6563745f6964180120012809120c0a047a6f6e6518022001280912120a0a" .
            "636c75737465725f696418032001280912140a0c6e6f64655f706f6f6c5f" .
            "696418042001280912370a0a6d616e6167656d656e7418052001280b3223" .
            "2e676f6f676c652e636f6e7461696e65722e76312e4e6f64654d616e6167" .
            "656d656e74226c0a1e526f6c6c6261636b4e6f6465506f6f6c5570677261" .
            "64655265717565737412120a0a70726f6a6563745f696418012001280912" .
            "0c0a047a6f6e6518022001280912120a0a636c75737465725f6964180320" .
            "01280912140a0c6e6f64655f706f6f6c5f6964180420012809224a0a154c" .
            "6973744e6f6465506f6f6c73526573706f6e736512310a0a6e6f64655f70" .
            "6f6f6c7318012003280b321d2e676f6f676c652e636f6e7461696e65722e" .
            "76312e4e6f6465506f6f6c22560a134e6f6465506f6f6c4175746f736361" .
            "6c696e67120f0a07656e61626c656418012001280812160a0e6d696e5f6e" .
            "6f64655f636f756e7418022001280512160a0e6d61785f6e6f64655f636f" .
            "756e7418032001280522ee010a105365744c6162656c7352657175657374" .
            "12120a0a70726f6a6563745f6964180120012809120c0a047a6f6e651802" .
            "2001280912120a0a636c75737465725f696418032001280912520a0f7265" .
            "736f757263655f6c6162656c7318042003280b32392e676f6f676c652e63" .
            "6f6e7461696e65722e76312e5365744c6162656c73526571756573742e52" .
            "65736f757263654c6162656c73456e74727912190a116c6162656c5f6669" .
            "6e6765727072696e741805200128091a350a135265736f757263654c6162" .
            "656c73456e747279120b0a036b6579180120012809120d0a0576616c7565" .
            "1802200128093a023801225d0a145365744c656761637941626163526571" .
            "7565737412120a0a70726f6a6563745f6964180120012809120c0a047a6f" .
            "6e6518022001280912120a0a636c75737465725f6964180320012809120f" .
            "0a07656e61626c6564180420012808224e0a1653746172744950526f7461" .
            "74696f6e5265717565737412120a0a70726f6a6563745f69641801200128" .
            "09120c0a047a6f6e6518022001280912120a0a636c75737465725f696418" .
            "032001280922510a19436f6d706c6574654950526f746174696f6e526571" .
            "7565737412120a0a70726f6a6563745f6964180120012809120c0a047a6f" .
            "6e6518022001280912120a0a636c75737465725f696418032001280932ee" .
            "1b0a0e436c75737465724d616e61676572129c010a0c4c697374436c7573" .
            "7465727312282e676f6f676c652e636f6e7461696e65722e76312e4c6973" .
            "74436c757374657273526571756573741a292e676f6f676c652e636f6e74" .
            "61696e65722e76312e4c697374436c757374657273526573706f6e736522" .
            "3782d3e4930231122f2f76312f70726f6a656374732f7b70726f6a656374" .
            "5f69647d2f7a6f6e65732f7b7a6f6e657d2f636c7573746572731298010a" .
            "0a476574436c757374657212262e676f6f676c652e636f6e7461696e6572" .
            "2e76312e476574436c7573746572526571756573741a1c2e676f6f676c65" .
            "2e636f6e7461696e65722e76312e436c7573746572224482d3e493023e12" .
            "3c2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f6e" .
            "65732f7b7a6f6e657d2f636c7573746572732f7b636c75737465725f6964" .
            "7d1296010a0d437265617465436c757374657212292e676f6f676c652e63" .
            "6f6e7461696e65722e76312e437265617465436c75737465725265717565" .
            "73741a1e2e676f6f676c652e636f6e7461696e65722e76312e4f70657261" .
            "74696f6e223a82d3e4930234222f2f76312f70726f6a656374732f7b7072" .
            "6f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d2f636c7573746572" .
            "733a012a12a3010a0d557064617465436c757374657212292e676f6f676c" .
            "652e636f6e7461696e65722e76312e557064617465436c75737465725265" .
            "71756573741a1e2e676f6f676c652e636f6e7461696e65722e76312e4f70" .
            "65726174696f6e224782d3e49302411a3c2f76312f70726f6a656374732f" .
            "7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d2f636c7573" .
            "746572732f7b636c75737465725f69647d3a012a12b1010a0d5365744d61" .
            "737465724175746812292e676f6f676c652e636f6e7461696e65722e7631" .
            "2e5365744d617374657241757468526571756573741a1e2e676f6f676c65" .
            "2e636f6e7461696e65722e76312e4f7065726174696f6e225582d3e49302" .
            "4f224a2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a" .
            "6f6e65732f7b7a6f6e657d2f636c7573746572732f7b636c75737465725f" .
            "69647d3a7365744d6173746572417574683a012a12a0010a0d44656c6574" .
            "65436c757374657212292e676f6f676c652e636f6e7461696e65722e7631" .
            "2e44656c657465436c7573746572526571756573741a1e2e676f6f676c65" .
            "2e636f6e7461696e65722e76312e4f7065726174696f6e224482d3e49302" .
            "3e2a3c2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a" .
            "6f6e65732f7b7a6f6e657d2f636c7573746572732f7b636c75737465725f" .
            "69647d12a4010a0e4c6973744f7065726174696f6e73122a2e676f6f676c" .
            "652e636f6e7461696e65722e76312e4c6973744f7065726174696f6e7352" .
            "6571756573741a2b2e676f6f676c652e636f6e7461696e65722e76312e4c" .
            "6973744f7065726174696f6e73526573706f6e7365223982d3e493023312" .
            "312f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f6e" .
            "65732f7b7a6f6e657d2f6f7065726174696f6e7312a2010a0c4765744f70" .
            "65726174696f6e12282e676f6f676c652e636f6e7461696e65722e76312e" .
            "4765744f7065726174696f6e526571756573741a1e2e676f6f676c652e63" .
            "6f6e7461696e65722e76312e4f7065726174696f6e224882d3e493024212" .
            "402f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f6e" .
            "65732f7b7a6f6e657d2f6f7065726174696f6e732f7b6f7065726174696f" .
            "6e5f69647d12aa010a0f43616e63656c4f7065726174696f6e122b2e676f" .
            "6f676c652e636f6e7461696e65722e76312e43616e63656c4f7065726174" .
            "696f6e526571756573741a162e676f6f676c652e70726f746f6275662e45" .
            "6d707479225282d3e493024c22472f76312f70726f6a656374732f7b7072" .
            "6f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d2f6f706572617469" .
            "6f6e732f7b6f7065726174696f6e5f69647d3a63616e63656c3a012a129e" .
            "010a0f476574536572766572436f6e666967122b2e676f6f676c652e636f" .
            "6e7461696e65722e76312e476574536572766572436f6e66696752657175" .
            "6573741a212e676f6f676c652e636f6e7461696e65722e76312e53657276" .
            "6572436f6e666967223b82d3e493023512332f76312f70726f6a65637473" .
            "2f7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d2f736572" .
            "766572636f6e66696712b6010a0d4c6973744e6f6465506f6f6c7312292e" .
            "676f6f676c652e636f6e7461696e65722e76312e4c6973744e6f6465506f" .
            "6f6c73526571756573741a2a2e676f6f676c652e636f6e7461696e65722e" .
            "76312e4c6973744e6f6465506f6f6c73526573706f6e7365224e82d3e493" .
            "024812462f76312f70726f6a656374732f7b70726f6a6563745f69647d2f" .
            "7a6f6e65732f7b7a6f6e657d2f636c7573746572732f7b636c7573746572" .
            "5f69647d2f6e6f6465506f6f6c7312b4010a0b4765744e6f6465506f6f6c" .
            "12272e676f6f676c652e636f6e7461696e65722e76312e4765744e6f6465" .
            "506f6f6c526571756573741a1d2e676f6f676c652e636f6e7461696e6572" .
            "2e76312e4e6f6465506f6f6c225d82d3e493025712552f76312f70726f6a" .
            "656374732f7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d" .
            "2f636c7573746572732f7b636c75737465725f69647d2f6e6f6465506f6f" .
            "6c732f7b6e6f64655f706f6f6c5f69647d12af010a0e4372656174654e6f" .
            "6465506f6f6c122a2e676f6f676c652e636f6e7461696e65722e76312e43" .
            "72656174654e6f6465506f6f6c526571756573741a1e2e676f6f676c652e" .
            "636f6e7461696e65722e76312e4f7065726174696f6e225182d3e493024b" .
            "22462f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f" .
            "6e65732f7b7a6f6e657d2f636c7573746572732f7b636c75737465725f69" .
            "647d2f6e6f6465506f6f6c733a012a12bb010a0e44656c6574654e6f6465" .
            "506f6f6c122a2e676f6f676c652e636f6e7461696e65722e76312e44656c" .
            "6574654e6f6465506f6f6c526571756573741a1e2e676f6f676c652e636f" .
            "6e7461696e65722e76312e4f7065726174696f6e225d82d3e49302572a55" .
            "2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f6e65" .
            "732f7b7a6f6e657d2f636c7573746572732f7b636c75737465725f69647d" .
            "2f6e6f6465506f6f6c732f7b6e6f64655f706f6f6c5f69647d12d9010a17" .
            "526f6c6c6261636b4e6f6465506f6f6c5570677261646512332e676f6f67" .
            "6c652e636f6e7461696e65722e76312e526f6c6c6261636b4e6f6465506f" .
            "6f6c55706772616465526571756573741a1e2e676f6f676c652e636f6e74" .
            "61696e65722e76312e4f7065726174696f6e226982d3e4930263225e2f76" .
            "312f70726f6a656374732f7b70726f6a6563745f69647d2f7a6f6e65732f" .
            "7b7a6f6e657d2f636c7573746572732f7b636c75737465725f69647d2f6e" .
            "6f6465506f6f6c732f7b6e6f64655f706f6f6c5f69647d3a726f6c6c6261" .
            "636b3a012a12da010a155365744e6f6465506f6f6c4d616e6167656d656e" .
            "7412312e676f6f676c652e636f6e7461696e65722e76312e5365744e6f64" .
            "65506f6f6c4d616e6167656d656e74526571756573741a1e2e676f6f676c" .
            "652e636f6e7461696e65722e76312e4f7065726174696f6e226e82d3e493" .
            "026822632f76312f70726f6a656374732f7b70726f6a6563745f69647d2f" .
            "7a6f6e65732f7b7a6f6e657d2f636c7573746572732f7b636c7573746572" .
            "5f69647d2f6e6f6465506f6f6c732f7b6e6f64655f706f6f6c5f69647d2f" .
            "7365744d616e6167656d656e743a012a12aa010a095365744c6162656c73" .
            "12252e676f6f676c652e636f6e7461696e65722e76312e5365744c616265" .
            "6c73526571756573741a1e2e676f6f676c652e636f6e7461696e65722e76" .
            "312e4f7065726174696f6e225682d3e4930250224b2f76312f70726f6a65" .
            "6374732f7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d2f" .
            "636c7573746572732f7b636c75737465725f69647d2f7265736f75726365" .
            "4c6162656c733a012a12ae010a0d5365744c65676163794162616312292e" .
            "676f6f676c652e636f6e7461696e65722e76312e5365744c656761637941" .
            "626163526571756573741a1e2e676f6f676c652e636f6e7461696e65722e" .
            "76312e4f7065726174696f6e225282d3e493024c22472f76312f70726f6a" .
            "656374732f7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e657d" .
            "2f636c7573746572732f7b636c75737465725f69647d2f6c656761637941" .
            "6261633a012a12b7010a0f53746172744950526f746174696f6e122b2e67" .
            "6f6f676c652e636f6e7461696e65722e76312e53746172744950526f7461" .
            "74696f6e526571756573741a1e2e676f6f676c652e636f6e7461696e6572" .
            "2e76312e4f7065726174696f6e225782d3e4930251224c2f76312f70726f" .
            "6a656374732f7b70726f6a6563745f69647d2f7a6f6e65732f7b7a6f6e65" .
            "7d2f636c7573746572732f7b636c75737465725f69647d3a737461727449" .
            "70526f746174696f6e3a012a12c0010a12436f6d706c6574654950526f74" .
            "6174696f6e122e2e676f6f676c652e636f6e7461696e65722e76312e436f" .
            "6d706c6574654950526f746174696f6e526571756573741a1e2e676f6f67" .
            "6c652e636f6e7461696e65722e76312e4f7065726174696f6e225a82d3e4" .
            "930254224f2f76312f70726f6a656374732f7b70726f6a6563745f69647d" .
            "2f7a6f6e65732f7b7a6f6e657d2f636c7573746572732f7b636c75737465" .
            "725f69647d3a636f6d706c6574654970526f746174696f6e3a012a426e0a" .
            "17636f6d2e676f6f676c652e636f6e7461696e65722e76314213436c7573" .
            "7465725365727669636550726f746f50015a3c676f6f676c652e676f6c61" .
            "6e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636f6e" .
            "7461696e65722f76313b636f6e7461696e6572620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

