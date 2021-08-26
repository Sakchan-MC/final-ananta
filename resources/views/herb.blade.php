@extends('layouts.app')
@section('content')

<div class="container home-section">
    <h2>สรรพคุณของสมุนไพร</h2>



    <section>
        <div class="animation-element slide-right">

            <div class="row border-herb">
                <div class="col-3">
                    <img src="{{ asset('img/home-aloe.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col ">
                    <span class="size-large ">ว่านหางจระเข้</span><br>

                    <span class="size-large">ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดี
                        แม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกา
                        แต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลาย
                        ซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมาย
                        จนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”
                        สามารถนำมาบรรเทาอาการปวดศีรษะได้</span>
                </div>

            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/Turmeric.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ขมิ้นชัน</span>
                    <br>
                    <span class="size-large">เรียกกันทั่วไปว่า “ขมิ้น” เป็นไม้ล้มลุกมีสีเหลืองอมส้ม
                        มีเหง้าอยู่ใต้ดิน มีกลิ่นหอม คนนิยมนำ “เหง้า”
                        ทั้งสดและแห้งมาใช้รักษาอาการที่เกี่ยวกับกระเพาะอาหาร
                        รวมทั้งแก้ท้องเสีย ท้องร่วง จุกเสียดแน่นท้อง และสามารถนำขมิ้นชันมาทาภายนอก
                        เพื่อใช้รักษาแผลเรื้อรัง แผลสด โรคผิวหนัง พุพอง รักษาชันนะตุ
                    </span>
                </div>
            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/Thong_Panchang.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ทองพันชั่ง</span>
                    <br>
                    <span class="size-large">เป็นสมุนไพรที่มีคุณค่าไม่ต่างไปจากชื่อ “ทองพันชั่ง”
                        หลายพื้นที่อาจเรียกว่า “ทองคันชั่ง” หรือ “หญ้ามันไก่” เป็นไม้พุ่มขนาดเล็ก
                        ออกดอกสีขาว ส่วนที่ใช้ทำยาคือ ใบและราก ที่หากนำปริมาณ 1 กำมือมาต้มรับประทานเช้าเย็น
                        จะช่วยดับพิษไข้ รักษาโรคผิวหนัง ริดสีดวงทวารหนัก แก้ไอเป็นเลือด ฆ่า
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="animation-element slide-right">

            <div class="row border-herb">
                <div class="col-3">
                    <img src="{{ asset('img/herbs/black_galingale.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col ">
                    <span class="size-large ">กระชายดำ</span><br>

                    <span class="size-large">สมุนไพรแสนมหัศจรรย์ของท่านชาย
                        เพราะสรรพคุณของกระชายดำที่ได้รับการกล่าวขานกันมากก็คือ
                        สรรพคุณเพิ่มพลังทางเพศ หรือแก้โรคกามตายด้าน
                        เนื่องจากฤทธิ์ของกระชายดำจะไปบำรุงกำลัง เพิ่มฮอร์โมนให้หนุ่ม ๆ
                        ทำให้สมรรถภาพทางเพศเพิ่มขึ้น </span>
                </div>

            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/Wan_persuaded.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ว่านชักมดลูก</span>
                    <br>
                    <span class="size-large"> มาที่พืชสมุนไพรสำหรับสาว ๆ กันบ้าง แค่ชื่อก็บอกอยู่แล้ว
                        เหมาะกับคุณสุภาพสตรีเป็นที่สุด
                        เพราะเหง้าของว่านชักมดลูกมีสรรพคุณช่วยขับประจำเดือนในสตรีที่ประจำเดือนมาไม่ปกติ
                        ส่วนผู้หญิงที่เพิ่งคลอดบุตร ว่านชักมดลูกก็จะช่วยบีบมดลูกให้เข้าอู่เร็วขึ้น ขับน้ำคาวปลา
                        และรักษาโรคมดลูกพิการปวดบวมได้
                        นอกจากนั้น ว่านชักมดลูก ยังแก้ริดสีดวงทวาร แก้ไส้เลื่อน แก้โรคลม รักษาอาการอาหารไม่ย่อย
                        ขณะที่รากของว่านชักมดลูกสามารถใช้แก้ท้องอืดเฟ้อได้อีกต่างหาก
                    </span>
                </div>
            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/red_freckles.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">กระเจี๊ยบแดง</span>
                    <br>
                    <span class="size-large"> หลายคนนำใบและยอดของกระเจี๊ยบแดงไปใส่ในแกง
                        ซึ่งนอกจากจะช่วยเพิ่มรสเปรี้ยวในอาหารแล้ว ใบกระเจี๊ยบแดงยังแก้โรคพยาธิตัวจี๊ด
                        แก้ไอ ละลายเสมหะ ส่วนดอกใช้แก้โรคนิ่วในไต นิ่วในกระเพาะปัสสาวะ ขัดเบา
                        ละลายไขมันในเส้นเลือดแต่ส่วนที่มีสรรพคุณมากเป็นพิเศษก็คือ ส่วนกลีบเลี้ยงของดอก
                        หรือกลีบที่เหลืออยู่ที่ผล สามารถช่วยลดไขมันในเส้นเลือด ลดน้ำหนัก ลดความดันโลหิต
                        นำไปทำเป็นน้ำกระเจี๊ยบดื่มช่วยให้ร่างกายสดชื่น ลดความเหนียวข้นของเลือด ขับปัสสาวะ
                        ป้องกันต่อมลูกหมากโตให้คุณผู้ชายได้ด้วย และมีการศึกษาทางวิทยาศาสตร์พบว่า
                        หากรับประทานกระเจี๊ยบแดงต่อเนื่อง 1 เดือน จะทำให้ระดับน้ำตาลในเลือดลดลง
                        ระดับไขมันในเลือด ทั้งคอเลสเตอรอล ไตรกลีเซอไรด์ ไขมันเลว (LDL) ลดลง
                        และยังเพิ่มไขมันชนิดดีคือ HDL ได้ด้วย
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="animation-element slide-right">

            <div class="row border-herb">
                <div class="col-3">
                    <img src="{{ asset('img/herbs/gooseberry.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col ">
                    <span class="size-large ">มะขามป้อม</span><br>

                    <span class="size-large">เป็นไม้ยืนต้นขนาดเล็ก-กลางที่จัดเป็นยาอายุวัฒนะ
                        เพราะมีสรรพคุณเพียบในแทบทุกส่วนของต้น แต่ที่รู้จักกันดีก็คือ
                        ผลของมะขามป้อมจะมีรสเปรี้ยวมาก ๆ แต่ก็ชุ่มคอ และให้วิตามินซีสูงมากเช่นกัน
                        ดังนั้น จึงมีคนนำผลมะขามป้อมสดมาใช้เป็นยาแก้หวัด แก้ไอ ละลายเสมหะ
                        รักษาโรคเลือดออกตามไรฟันนอกจากนั้นแล้ว ส่วน "ราก" ยังแก้พิษตะขาบกัด
                        แก้ร้อนใน ลดความดันโลหิต แก้โรคเรื้อน ส่วนเปลือก แก้โรคบิด และฟกช้ำ
                        ส่วนปมก้าน ใช้เป็นน้ำยาบ้วนปาก แก้ปวดฟัน "ผลแห้ง" ใช้รักษาอาการท้องเสียง
                        หนองใน เยื่อบุตาอักเสบ แก้ตกเลือด และส่วน "เมล็ด" ก็สามารถนำไปเผาไฟผสมกับน้ำมันพืช
                        ทาแก้คัน แก้หืด หรือจะตำเมล็ดให้เป็นผง ชงกับน้ำร้อนดื่มแก้โรคเบาหวาน หอบหืด
                        หลอดลมอักเสบก็ได้</span>
                </div>

            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/Andrographis_paniculata.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ฟ้าทะลายโจร</span>
                    <br>
                    <span class="size-large">ฟ้าทะลายโจร เป็นไม้ล้มลุก สูงประมาณ 30-70 เซนติเมตร
                        ทุกส่วนมีรสขม สรรพคุณเด่น ๆ ที่ทุกคนรู้จักกันดีก็คือ ใช้เป็นยาแก้ไข้ แก้ไข้หวัดใหญ่ แก้ร้อนใน
                        เพราะมีฤทธิ์ช่วยสร้างภูมิคุ้มกันให้แก่ร่างกาย หากรับประทานบ่อย ๆ จะช่วยป้องกันไม่ให้เป็นหวัดง่าย
                        นอกจากเรื่องหวัดแล้ว ฟ้าทะลายโจรยังระงับอาการอักเสบ ต่อมทอนซิลอักเสบ ขับเสมหะ รักษาอาการท้องเสีย
                        ลำไส้อักเสบ รักษาโรคตับ เบาหวาน โรคงูสวัด ริดสีดวงทวาร
                        และรสขมของฟ้าทะลายโจรยังช่วยให้เจริญอาหารขึ้นข้อควรระวัง ก็คือ
                        คนที่มีอาการเจ็บคอเนื่องจากติดเชื้อ Streptococcus group A, ผู้ที่เป็นโรคหัวใจรูห์มาติค,
                        มีอาการเจ็บคอ เนื่องจากมีการติดเชื้อแบคทีเรีย, เป็นความดันต่ำ และสตรีมีครรภ์
                        ไม่ควรทานฟ้าทะลายโจร
                        และหากใครทานแล้วเกิดปวดท้อง ปวดเอว วิงเวียนศีรษะ ใจสั่น ควรหยุดใช้ฟ้าทะลายโจร นอกจากนั้นแล้ว
                        ยังไม่ควรรับประทานต่อเนื่องนานเกินไป เพราะอาจทำให้แขนขามีอาการชา หรืออ่อนแรงได้
                    </span>
                </div>
            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/herbs/Yanang.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ย่านาง</span>
                    <br>
                    <span class="size-large"> ย่านางเป็นสมุนไพรรสจืด เป็นยาเย็น มีฤทธิ์ดับพิษร้อน
                        คนจึงนำใบย่านางไปคั้นเป็นน้ำคลอโรฟิลล์ เพื่อเพิ่มความสดชื่น ปรับอุณหภูมิในร่างกาย
                        และยังนำใบย่านางไปช่วยดับพิษไข้ ดับพิษของอาหาร แก้อาการผิดสำแดง แก้พิษเมา
                        แก้เลือดตก แก้กำเดา ลดความร้อนได้ด้วย นอกจากใบแล้ว ส่วนอื่น ๆ ของย่านางก็มีประโยชน์เช่นกัน
                        ทั้ง "ราก" ที่ใช้แก้ไข้พิษ ไข้หัด ไข้ฝีดาษ ไข้กาฬ ไข้ทับระดู "เถาย่านาง" ใช้แก้ไข
                        ลดความร้อนในร่างกายขณะที่ข้อมูลทางเภสัชวิทยาระบุว่า ย่านาง ยังช่วยต้านมาลาเรีย
                        ยับยั้งการหดเกร็งของลำไส้ ต้านฮีสตามีน ส่วนข้อมูลทางโภชนาการระบุว่า
                        ย่านางมีเบต้าแคโรทีนในปริมาณสูง
                        ซึ่งจะช่วยต่อต้านอนุมูลอิสระ ช่วยชะลอความเสื่อมของเซลล์ในร่างกาย แถมยังอุดมไปด้วยเส้นในอาหาร
                        แคลเซียม
                        เหล็ก ฟอสฟอรัส
                        ย่านางจึงเป็นหนึ่งในจำนวนผักพื้นบ้านที่นักวิจัยแนะนำให้นำมาใช้ในรูปแบบอาหารเพื่อรักษาโรคมะเร็ง
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="animation-element slide-right">

            <div class="row border-herb">
                <div class="col-3">
                    <img src="{{ asset('img/herbs/Moringa.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col ">
                    <span class="size-large ">มะรุม</span><br>

                    <span class="size-large">พืชสมุนไพรสุดแสนมหัศจรรย์
                        เพราะนอกจากจะนำมาปรุงอาหารรับประทานแล้วได้รับสารอาหารอย่างวิตามินเอ
                        วิตามินซี แคลเซียม โพแทสเซียม ใยอาหาร แล้ว มะรุม
                        ยังเป็นยาวิเศษรักษาที่ทุกส่วนสามารถใช้รักษาได้สารพัดโรคเริ่มจาก "ราก"
                        ที่จะช่วยบำรุงไฟธาตุ แก้อาการบวม "เปลือก" ใช้ประคบแก้โรคปวดหลัง ปวดข้อ
                        รับประทานเป็นยาขับลมในลำไส้ "กระพี้" ใช้แก้ไขสันนิบาด
                        "ใบ" มีแคลเซียม วิตามินซี และสารต้านอนุมูลอิสระสูงมาก ใช้แก้เลือดออกตามไรฟัน แก้อักเสบ
                        มีฤทธิ์เป็นยาระบายอ่อน ๆ "ดอก"
                        ช่วยบำรุงร่างกาย ขับปัสสาวะ ขับน้ำตา ใช้ต้มทำน้ำชาดื่มช่วยให้นอนหลับสบาย "ฝัก" ใช้แก้ไข้หัวลม
                        "เมล็ด" นำมาสกัดเป็นน้ำมันใช้รักษาโรคปวดข้อ
                        โรคเกาท์ รักษาโรคผิวหนังจากเชื้อรา และ "เนื้อในเมล็ดมะรุม" ใช้แก้ไอได้ดี
                        รวมทั้งยังเพิ่มภูมิต้านทานให้ร่างกายได้ด้วย หากรับประทานเป็นประจำ
                        แต่สำหรับคนที่เป็นโรคเลือด G6PD ไม่ควรรับประทานมะรุม</span>
                </div>

            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/tippy.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ขมิ้นชัน</span>
                    <br>
                    <span class="size-large">เรียกกันทั่วไปว่า “ขมิ้น” เป็นไม้ล้มลุกมีสีเหลืองอมส้ม
                        มีเหง้าอยู่ใต้ดิน มีกลิ่นหอม คนนิยมนำ “เหง้า”
                        ทั้งสดและแห้งมาใช้รักษาอาการที่เกี่ยวกับกระเพาะอาหาร
                        รวมทั้งแก้ท้องเสีย ท้องร่วง จุกเสียดแน่นท้อง และสามารถนำขมิ้นชันมาทาภายนอก
                        เพื่อใช้รักษาแผลเรื้อรัง แผลสด โรคผิวหนัง พุพอง รักษาชันนะตุ
                    </span>
                </div>
            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/tippy.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ขมิ้นชัน</span>
                    <br>
                    <span class="size-large">เรียกกันทั่วไปว่า “ขมิ้น” เป็นไม้ล้มลุกมีสีเหลืองอมส้ม
                        มีเหง้าอยู่ใต้ดิน มีกลิ่นหอม คนนิยมนำ “เหง้า”
                        ทั้งสดและแห้งมาใช้รักษาอาการที่เกี่ยวกับกระเพาะอาหาร
                        รวมทั้งแก้ท้องเสีย ท้องร่วง จุกเสียดแน่นท้อง และสามารถนำขมิ้นชันมาทาภายนอก
                        เพื่อใช้รักษาแผลเรื้อรัง แผลสด โรคผิวหนัง พุพอง รักษาชันนะตุ
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="animation-element slide-right">

            <div class="row border-herb">
                <div class="col-3">
                    <img src="{{ asset('img/tippy.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col ">
                    <span class="size-large ">ว่านหางจระเข้</span><br>

                    <span class="size-large">ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดี
                        แม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกา
                        แต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลาย
                        ซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมาย
                        จนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”
                        สามารถนำมาบรรเทาอาการปวดศีรษะได้</span>
                </div>

            </div>
        </div>
        <div class="animation-element slide-right">
            <div class="row border-herb">

                <div class="col-3">
                    <img src="{{ asset('img/tippy.jpg') }}" style="width:200px;height:200px;">
                </div>
                <div class="col">
                    <span class="size-large">ขมิ้นชัน</span>
                    <br>
                    <span class="size-large">เรียกกันทั่วไปว่า “ขมิ้น” เป็นไม้ล้มลุกมีสีเหลืองอมส้ม
                        มีเหง้าอยู่ใต้ดิน มีกลิ่นหอม คนนิยมนำ “เหง้า”
                        ทั้งสดและแห้งมาใช้รักษาอาการที่เกี่ยวกับกระเพาะอาหาร
                        รวมทั้งแก้ท้องเสีย ท้องร่วง จุกเสียดแน่นท้อง และสามารถนำขมิ้นชันมาทาภายนอก
                        เพื่อใช้รักษาแผลเรื้อรัง แผลสด โรคผิวหนัง พุพอง รักษาชันนะตุ
                    </span>
                </div>
            </div>
        </div>
</div>
</section>
@endsection('content')