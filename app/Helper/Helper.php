<?php

    namespace App\Helper;
    class Helper
    {
        public static function status($status)
        {
            if ($status=="0")
            {
                return "Pending";
            }
            else if ($status=="1")
            {
                return "Process";
            }
            else if ($status=="2")
            {
                return "Lunas";
            }
            else if ($status=="3")
            {
                return "Diambil";
            }

        }

        public static function arrStatus()
        {
            return ["0","1","2","3"];
        }

        public static function statusProyek()
        {
            return ["Pending","Proses","Selesai","Gagal"];
        }

        public static function statusTermin()
        {
            return ["Pending","Proses","Lunas"];
        }
    }

?>