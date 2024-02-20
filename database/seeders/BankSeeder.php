<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('banks')->insert([
            "id"=> 17,
            "name"=> "Ngân hàng TMCP Công thương Việt Nam",
            "code"=> "ICB",
            "bin"=> "970415",
            "shortName"=> "VietinBank",
            "logo"=> "https://api.vietqr.io/img/ICB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VietinBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "ICBVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 43,
            "name"=> "Ngân hàng TMCP Ngoại Thương Việt Nam",
            "code"=> "VCB",
            "bin"=> "970436",
            "shortName"=> "Vietcombank",
            "logo"=> "https://api.vietqr.io/img/VCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Vietcombank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "BFTVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 4,
            "name"=> "Ngân hàng TMCP Đầu tư và Phát triển Việt Nam",
            "code"=> "BIDV",
            "bin"=> "970418",
            "shortName"=> "BIDV",
            "logo"=> "https://api.vietqr.io/img/BIDV.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "BIDV",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "BIDVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 42,
            "name"=> "Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam",
            "code"=> "VBA",
            "bin"=> "970405",
            "shortName"=> "Agribank",
            "logo"=> "https://api.vietqr.io/img/VBA.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Agribank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VBAAVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 26,
            "name"=> "Ngân hàng TMCP Phương Đông",
            "code"=> "OCB",
            "bin"=> "970448",
            "shortName"=> "OCB",
            "logo"=> "https://api.vietqr.io/img/OCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "OCB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "ORCOVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 21,
            "name"=> "Ngân hàng TMCP Quân đội",
            "code"=> "MB",
            "bin"=> "970422",
            "shortName"=> "MBBank",
            "logo"=> "https://api.vietqr.io/img/MB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "MBBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "MSCBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 38,
            "name"=> "Ngân hàng TMCP Kỹ thương Việt Nam",
            "code"=> "TCB",
            "bin"=> "970407",
            "shortName"=> "Techcombank",
            "logo"=> "https://api.vietqr.io/img/TCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Techcombank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VTCBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 2,
            "name"=> "Ngân hàng TMCP Á Châu",
            "code"=> "ACB",
            "bin"=> "970416",
            "shortName"=> "ACB",
            "logo"=> "https://api.vietqr.io/img/ACB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "ACB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "ASCBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 47,
            "name"=> "Ngân hàng TMCP Việt Nam Thịnh Vượng",
            "code"=> "VPB",
            "bin"=> "970432",
            "shortName"=> "VPBank",
            "logo"=> "https://api.vietqr.io/img/VPB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VPBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VPBKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 39,
            "name"=> "Ngân hàng TMCP Tiên Phong",
            "code"=> "TPB",
            "bin"=> "970423",
            "shortName"=> "TPBank",
            "logo"=> "https://api.vietqr.io/img/TPB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "TPBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "TPBVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 36,
            "name"=> "Ngân hàng TMCP Sài Gòn Thương Tín",
            "code"=> "STB",
            "bin"=> "970403",
            "shortName"=> "Sacombank",
            "logo"=> "https://api.vietqr.io/img/STB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Sacombank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SGTTVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 12,
            "name"=> "Ngân hàng TMCP Phát triển Thành phố Hồ Chí Minh",
            "code"=> "HDB",
            "bin"=> "970437",
            "shortName"=> "HDBank",
            "logo"=> "https://api.vietqr.io/img/HDB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "HDBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "HDBCVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 44,
            "name"=> "Ngân hàng TMCP Bản Việt",
            "code"=> "VCCB",
            "bin"=> "970454",
            "shortName"=> "VietCapitalBank",
            "logo"=> "https://api.vietqr.io/img/VCCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VietCapitalBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VCBCVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 31,
            "name"=> "Ngân hàng TMCP Sài Gòn",
            "code"=> "SCB",
            "bin"=> "970429",
            "shortName"=> "SCB",
            "logo"=> "https://api.vietqr.io/img/SCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "SCB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SACLVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 45,
            "name"=> "Ngân hàng TMCP Quốc tế Việt Nam",
            "code"=> "VIB",
            "bin"=> "970441",
            "shortName"=> "VIB",
            "logo"=> "https://api.vietqr.io/img/VIB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VIB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VNIBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 35,
            "name"=> "Ngân hàng TMCP Sài Gòn - Hà Nội",
            "code"=> "SHB",
            "bin"=> "970443",
            "shortName"=> "SHB",
            "logo"=> "https://api.vietqr.io/img/SHB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "SHB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SHBAVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 10,
            "name"=> "Ngân hàng TMCP Xuất Nhập khẩu Việt Nam",
            "code"=> "EIB",
            "bin"=> "970431",
            "shortName"=> "Eximbank",
            "logo"=> "https://api.vietqr.io/img/EIB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Eximbank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "EBVIVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 22,
            "name"=> "Ngân hàng TMCP Hàng Hải",
            "code"=> "MSB",
            "bin"=> "970426",
            "shortName"=> "MSB",
            "logo"=> "https://api.vietqr.io/img/MSB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "MSB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "MCOBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 53,
            "name"=> "TMCP Việt Nam Thịnh Vượng - Ngân hàng số CAKE by VPBank",
            "code"=> "CAKE",
            "bin"=> "546034",
            "shortName"=> "CAKE",
            "logo"=> "https://api.vietqr.io/img/CAKE.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "CAKE",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 54,
            "name"=> "TMCP Việt Nam Thịnh Vượng - Ngân hàng số Ubank by VPBank",
            "code"=> "Ubank",
            "bin"=> "546035",
            "shortName"=> "Ubank",
            "logo"=> "https://api.vietqr.io/img/UBANK.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Ubank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 58,
            "name"=> "Ngân hàng số Timo by Ban Viet Bank (Timo by Ban Viet Bank)",
            "code"=> "TIMO",
            "bin"=> "963388",
            "shortName"=> "Timo",
            "logo"=> "https://vietqr.net/portal-service/resources/icons/TIMO.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 0,
            "short_name"=> "Timo",
            "support"=> 0,
            "isTransfer"=> 1,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 57,
            "name"=> "Tổng Công ty Dịch vụ số Viettel - Chi nhánh tập đoàn công nghiệp viễn thông Quân Đội",
            "code"=> "VTLMONEY",
            "bin"=> "971005",
            "shortName"=> "ViettelMoney",
            "logo"=> "https://api.vietqr.io/img/VIETTELMONEY.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "ViettelMoney",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 56,
            "name"=> "VNPT Money",
            "code"=> "VNPTMONEY",
            "bin"=> "971011",
            "shortName"=> "VNPTMoney",
            "logo"=> "https://api.vietqr.io/img/VNPTMONEY.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "VNPTMoney",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 34,
            "name"=> "Ngân hàng TMCP Sài Gòn Công Thương",
            "code"=> "SGICB",
            "bin"=> "970400",
            "shortName"=> "SaigonBank",
            "logo"=> "https://api.vietqr.io/img/SGICB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "SaigonBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SBITVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 3,
            "name"=> "Ngân hàng TMCP Bắc Á",
            "code"=> "BAB",
            "bin"=> "970409",
            "shortName"=> "BacABank",
            "logo"=> "https://api.vietqr.io/img/BAB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "BacABank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "NASCVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 30,
            "name"=> "Ngân hàng TMCP Đại Chúng Việt Nam",
            "code"=> "PVCB",
            "bin"=> "970412",
            "shortName"=> "PVcomBank",
            "logo"=> "https://api.vietqr.io/img/PVCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "PVcomBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "WBVNVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 27,
            "name"=> "Ngân hàng Thương mại TNHH MTV Đại Dương",
            "code"=> "Oceanbank",
            "bin"=> "970414",
            "shortName"=> "Oceanbank",
            "logo"=> "https://api.vietqr.io/img/OCEANBANK.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Oceanbank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "OCBKUS3M"
        ]);
        DB::table('banks')->insert([
            "id"=> 24,
            "name"=> "Ngân hàng TMCP Quốc Dân",
            "code"=> "NCB",
            "bin"=> "970419",
            "shortName"=> "NCB",
            "logo"=> "https://api.vietqr.io/img/NCB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "NCB",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "NVBAVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 37,
            "name"=> "Ngân hàng TNHH MTV Shinhan Việt Nam",
            "code"=> "SHBVN",
            "bin"=> "970424",
            "shortName"=> "ShinhanBank",
            "logo"=> "https://api.vietqr.io/img/SHBVN.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "ShinhanBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SHBKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 1,
            "name"=> "Ngân hàng TMCP An Bình",
            "code"=> "ABB",
            "bin"=> "970425",
            "shortName"=> "ABBANK",
            "logo"=> "https://api.vietqr.io/img/ABB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "ABBANK",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "ABBKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 41,
            "name"=> "Ngân hàng TMCP Việt Á",
            "code"=> "VAB",
            "bin"=> "970427",
            "shortName"=> "VietABank",
            "logo"=> "https://api.vietqr.io/img/VAB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VietABank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VNACVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 23,
            "name"=> "Ngân hàng TMCP Nam Á",
            "code"=> "NAB",
            "bin"=> "970428",
            "shortName"=> "NamABank",
            "logo"=> "https://api.vietqr.io/img/NAB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "NamABank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "NAMAVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 29,
            "name"=> "Ngân hàng TMCP Xăng dầu Petrolimex",
            "code"=> "PGB",
            "bin"=> "970430",
            "shortName"=> "PGBank",
            "logo"=> "https://api.vietqr.io/img/PGB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "PGBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "PGBLVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 46,
            "name"=> "Ngân hàng TMCP Việt Nam Thương Tín",
            "code"=> "VIETBANK",
            "bin"=> "970433",
            "shortName"=> "VietBank",
            "logo"=> "https://api.vietqr.io/img/VIETBANK.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "VietBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "VNTTVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 5,
            "name"=> "Ngân hàng TMCP Bảo Việt",
            "code"=> "BVB",
            "bin"=> "970438",
            "shortName"=> "BaoVietBank",
            "logo"=> "https://api.vietqr.io/img/BVB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "BaoVietBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "BVBVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 33,
            "name"=> "Ngân hàng TMCP Đông Nam Á",
            "code"=> "SEAB",
            "bin"=> "970440",
            "shortName"=> "SeABank",
            "logo"=> "https://api.vietqr.io/img/SEAB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "SeABank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "SEAVVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 52,
            "name"=> "Ngân hàng Hợp tác xã Việt Nam",
            "code"=> "COOPBANK",
            "bin"=> "970446",
            "shortName"=> "COOPBANK",
            "logo"=> "https://api.vietqr.io/img/COOPBANK.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "COOPBANK",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 20,
            "name"=> "Ngân hàng TMCP Bưu Điện Liên Việt",
            "code"=> "LPB",
            "bin"=> "970449",
            "shortName"=> "LienVietPostBank",
            "logo"=> "https://api.vietqr.io/img/LPB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "LienVietPostBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "LVBKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 19,
            "name"=> "Ngân hàng TMCP Kiên Long",
            "code"=> "KLB",
            "bin"=> "970452",
            "shortName"=> "KienLongBank",
            "logo"=> "https://api.vietqr.io/img/KLB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "KienLongBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "KLBKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 55,
            "name"=> "Ngân hàng Đại chúng TNHH Kasikornbank",
            "code"=> "KBank",
            "bin"=> "668888",
            "shortName"=> "KBank",
            "logo"=> "https://api.vietqr.io/img/KBANK.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "KBank",
            "support"=> 3,
            "isTransfer"=> 1,
            "swift_code"=> "KASIVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 50,
            "name"=> "Ngân hàng Kookmin - Chi nhánh Hà Nội",
            "code"=> "KBHN",
            "bin"=> "970462",
            "shortName"=> "KookminHN",
            "logo"=> "https://api.vietqr.io/img/KBHN.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "KookminHN",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 60,
            "name"=> "Ngân hàng KEB Hana – Chi nhánh Thành phố Hồ Chí Minh",
            "code"=> "KEBHANAHCM",
            "bin"=> "970466",
            "shortName"=> "KEBHanaHCM",
            "logo"=> "https://api.vietqr.io/img/KEBHANAHCM.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "KEBHanaHCM",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 61,
            "name"=> "Ngân hàng KEB Hana – Chi nhánh Hà Nội",
            "code"=> "KEBHANAHN",
            "bin"=> "970467",
            "shortName"=> "KEBHANAHN",
            "logo"=> "https://api.vietqr.io/img/KEBHANAHN.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "KEBHANAHN",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 62,
            "name"=> "Công ty Tài chính TNHH MTV Mirae Asset (Việt Nam) ",
            "code"=> "MAFC",
            "bin"=> "977777",
            "shortName"=> "MAFC",
            "logo"=> "https://api.vietqr.io/img/MAFC.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "MAFC",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 59,
            "name"=> "Ngân hàng Citibank, N.A. - Chi nhánh Hà Nội",
            "code"=> "CITIBANK",
            "bin"=> "533948",
            "shortName"=> "Citibank",
            "logo"=> "https://api.vietqr.io/img/CITIBANK.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "Citibank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 51,
            "name"=> "Ngân hàng Kookmin - Chi nhánh Thành phố Hồ Chí Minh",
            "code"=> "KBHCM",
            "bin"=> "970463",
            "shortName"=> "KookminHCM",
            "logo"=> "https://api.vietqr.io/img/KBHCM.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "KookminHCM",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 63,
            "name"=> "Ngân hàng Chính sách Xã hội",
            "code"=> "VBSP",
            "bin"=> "999888",
            "shortName"=> "VBSP",
            "logo"=> "https://api.vietqr.io/img/VBSP.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "VBSP",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 49,
            "name"=> "Ngân hàng TNHH MTV Woori Việt Nam",
            "code"=> "WVN",
            "bin"=> "970457",
            "shortName"=> "Woori",
            "logo"=> "https://api.vietqr.io/img/WVN.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "Woori",
            "support"=> 0,
            "isTransfer"=> 1,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 48,
            "name"=> "Ngân hàng Liên doanh Việt - Nga",
            "code"=> "VRB",
            "bin"=> "970421",
            "shortName"=> "VRB",
            "logo"=> "https://api.vietqr.io/img/VRB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "VRB",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 40,
            "name"=> "Ngân hàng United Overseas - Chi nhánh TP. Hồ Chí Minh",
            "code"=> "UOB",
            "bin"=> "970458",
            "shortName"=> "UnitedOverseas",
            "logo"=> "https://api.vietqr.io/img/UOB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "UnitedOverseas",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 32,
            "name"=> "Ngân hàng TNHH MTV Standard Chartered Bank Việt Nam",
            "code"=> "SCVN",
            "bin"=> "970410",
            "shortName"=> "StandardChartered",
            "logo"=> "https://api.vietqr.io/img/SCVN.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "StandardChartered",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "SCBLVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 28,
            "name"=> "Ngân hàng TNHH MTV Public Việt Nam",
            "code"=> "PBVN",
            "bin"=> "970439",
            "shortName"=> "PublicBank",
            "logo"=> "https://api.vietqr.io/img/PBVN.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "PublicBank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "VIDPVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 25,
            "name"=> "Ngân hàng Nonghyup - Chi nhánh Hà Nội",
            "code"=> "NHB HN",
            "bin"=> "801011",
            "shortName"=> "Nonghyup",
            "logo"=> "https://api.vietqr.io/img/NHB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "Nonghyup",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 18,
            "name"=> "Ngân hàng TNHH Indovina",
            "code"=> "IVB",
            "bin"=> "970434",
            "shortName"=> "IndovinaBank",
            "logo"=> "https://api.vietqr.io/img/IVB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "IndovinaBank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 16,
            "name"=> "Ngân hàng Công nghiệp Hàn Quốc - Chi nhánh TP. Hồ Chí Minh",
            "code"=> "IBK - HCM",
            "bin"=> "970456",
            "shortName"=> "IBKHCM",
            "logo"=> "https://api.vietqr.io/img/IBK.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "IBKHCM",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 15,
            "name"=> "Ngân hàng Công nghiệp Hàn Quốc - Chi nhánh Hà Nội",
            "code"=> "IBK - HN",
            "bin"=> "970455",
            "shortName"=> "IBKHN",
            "logo"=> "https://api.vietqr.io/img/IBK.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "IBKHN",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> null
        ]);
        DB::table('banks')->insert([
            "id"=> 14,
            "name"=> "Ngân hàng TNHH MTV HSBC (Việt Nam)",
            "code"=> "HSBC",
            "bin"=> "458761",
            "shortName"=> "HSBC",
            "logo"=> "https://api.vietqr.io/img/HSBC.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "HSBC",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "HSBCVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 13,
            "name"=> "Ngân hàng TNHH MTV Hong Leong Việt Nam",
            "code"=> "HLBVN",
            "bin"=> "970442",
            "shortName"=> "HongLeong",
            "logo"=> "https://api.vietqr.io/img/HLBVN.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "HongLeong",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "HLBBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 11,
            "name"=> "Ngân hàng Thương mại TNHH MTV Dầu Khí Toàn Cầu",
            "code"=> "GPB",
            "bin"=> "970408",
            "shortName"=> "GPBank",
            "logo"=> "https://api.vietqr.io/img/GPB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "GPBank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "GBNKVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 9,
            "name"=> "Ngân hàng TMCP Đông Á",
            "code"=> "DOB",
            "bin"=> "970406",
            "shortName"=> "DongABank",
            "logo"=> "https://api.vietqr.io/img/DOB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "DongABank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "EACBVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 8,
            "name"=> "DBS Bank Ltd - Chi nhánh Thành phố Hồ Chí Minh",
            "code"=> "DBS",
            "bin"=> "796500",
            "shortName"=> "DBSBank",
            "logo"=> "https://api.vietqr.io/img/DBS.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 0,
            "short_name"=> "DBSBank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "DBSSVNVX"
        ]);
        DB::table('banks')->insert([
            "id"=> 7,
            "name"=> "Ngân hàng TNHH MTV CIMB Việt Nam",
            "code"=> "CIMB",
            "bin"=> "422589",
            "shortName"=> "CIMB",
            "logo"=> "https://api.vietqr.io/img/CIMB.png",
            "transferSupported"=> 1,
            "lookupSupported"=> 1,
            "short_name"=> "CIMB",
            "support"=> 0,
            "isTransfer"=> 1,
            "swift_code"=> "CIBBVNVN"
        ]);
        DB::table('banks')->insert([
            "id"=> 6,
            "name"=> "Ngân hàng Thương mại TNHH MTV Xây dựng Việt Nam",
            "code"=> "CBB",
            "bin"=> "970444",
            "shortName"=> "CBBank",
            "logo"=> "https://api.vietqr.io/img/CBB.png",
            "transferSupported"=> 0,
            "lookupSupported"=> 1,
            "short_name"=> "CBBank",
            "support"=> 0,
            "isTransfer"=> 0,
            "swift_code"=> "GTBAVNVX"
        ]);
        //Ví điện tử
        DB::table('banks')->insert([
                "name" => "Ví MoMo",
                "shortName" => "MoMo",
                "logo" => "https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png"
        ]);
        DB::table('banks')->insert([
                "name" => "ZaloPay",
                "shortName" => "ZaloPay",
                "logo" => "https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-ZaloPay-Square.png"
        ]);
        DB::table('banks')->insert([
                "name" => "ViettelPay",
                "shortName" => "ViettelPay",
                "logo" => "https://inkythuatso.com/uploads/thumbnails/800/2021/12/logo-viettelpay-inkythuatso-3-14-09-02-46.jpg"
        ]);
        DB::table('banks')->insert([
                "name" => "ShopeePay",
                "shortName" => "ShopeePay",
                "logo" => "https://logowik.com/content/uploads/images/shopeepay4268.jpg"
        ]);
        DB::table('banks')->insert([
                "name" => "VNPay",
                "shortName" => "VNPay",
                "logo" => "https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-VNPAY-QR.png"
        ]);
        DB::table('banks')->insert([
                "name" => "AirPay",
                "shortName" => "AirPay",
                "logo" => "https://play-lh.googleusercontent.com/5Ka1BRMkvqwg-DkPeLOV0T21aLTaq2lN1D2ilUQS9Yasae_VmvQfDVeKMjCnnSLPUOE=w240-h480-rw"
        ]);
        DB::table('banks')->insert([
                "name" => "VTC Pay",
                "shortName" => "VTC Pay",
                "logo" => "https://static.wikia.nocookie.net/logos/images/e/e7/VTC_Pay_logo.png/revision/latest?cb=20181118075152&path-prefix=vi"
        ]);
        DB::table('banks')->insert([
                "name" => "Moca",
                "shortName" => "",
                "logo" => "https://s-vnba-cdn.aicms.vn/vnba-media/23/8/29/logo-moca_64edb88a8a735.jpg"
        ]);
        DB::table('banks')->insert([
                "name" => "Payoo",
                "shortName" => "",
                "logo" => "https://payoo.vn/theme/img/payoo.svg?v=1706495575"
        ]);
        DB::table('banks')->insert([
                "name" => "Ví Việt",
                "shortName" => "",
                "logo" => "https://lpbank.com.vn/wp-content/uploads/2019/03/favicon-1.png"
        ]);
    }
}
