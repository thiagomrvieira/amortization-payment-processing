<?php

namespace Database\Seeders;

use App\Models\Amortization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmortizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amortizations = [
            [
               "schedule_date" => "2023-06-21 07:24:35",
               "state" => "pending",
               "amount" => 1388,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-01 09:26:19",
               "state" => "paid",
               "amount" => 2659,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-21 02:23:31",
               "state" => "pending",
               "amount" => 1814,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-05 07:23:18",
               "state" => "paid",
               "amount" => 2522,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-27 08:52:13",
               "state" => "pending",
               "amount" => 3616,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-05 18:08:05",
               "state" => "pending",
               "amount" => 3571,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-28 00:02:39",
               "state" => "pending",
               "amount" => 2566,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-07 03:31:51",
               "state" => "pending",
               "amount" => 2372,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-27 21:36:35",
               "state" => "pending",
               "amount" => 3136,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-06 09:25:13",
               "state" => "pending",
               "amount" => 4790,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-13 12:43:25",
               "state" => "paid",
               "amount" => 1325,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-03 11:17:03",
               "state" => "pending",
               "amount" => 4968,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-14 18:14:42",
               "state" => "pending",
               "amount" => 1146,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-16 19:01:21",
               "state" => "pending",
               "amount" => 2867,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-18 10:25:36",
               "state" => "paid",
               "amount" => 3202,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-06 08:18:19",
               "state" => "pending",
               "amount" => 3178,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-27 12:15:20",
               "state" => "pending",
               "amount" => 2833,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-22 00:11:20",
               "state" => "paid",
               "amount" => 3898,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-23 10:05:15",
               "state" => "pending",
               "amount" => 3331,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-11 18:34:16",
               "state" => "paid",
               "amount" => 4470,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-13 17:01:57",
               "state" => "pending",
               "amount" => 4120,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-06 04:21:13",
               "state" => "pending",
               "amount" => 3139,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-29 08:43:53",
               "state" => "pending",
               "amount" => 2702,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-16 20:34:50",
               "state" => "pending",
               "amount" => 2765,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-21 18:34:02",
               "state" => "paid",
               "amount" => 3978,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-04 04:24:47",
               "state" => "pending",
               "amount" => 3244,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-04-30 22:13:01",
               "state" => "paid",
               "amount" => 2876,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-21 15:29:16",
               "state" => "paid",
               "amount" => 2755,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-26 08:52:11",
               "state" => "pending",
               "amount" => 3259,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-08 12:06:40",
               "state" => "paid",
               "amount" => 2539,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-28 02:18:23",
               "state" => "pending",
               "amount" => 1927,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-08 11:54:48",
               "state" => "paid",
               "amount" => 4245,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-16 09:34:52",
               "state" => "paid",
               "amount" => 4131,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-28 16:00:06",
               "state" => "paid",
               "amount" => 2450,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-30 11:32:38",
               "state" => "pending",
               "amount" => 2859,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-01 08:53:31",
               "state" => "pending",
               "amount" => 3076,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-13 20:56:26",
               "state" => "pending",
               "amount" => 2700,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-25 02:53:20",
               "state" => "pending",
               "amount" => 3676,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-13 00:50:20",
               "state" => "paid",
               "amount" => 3132,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-02 11:12:04",
               "state" => "pending",
               "amount" => 2476,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-13 15:33:27",
               "state" => "paid",
               "amount" => 2117,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-08 23:14:42",
               "state" => "paid",
               "amount" => 4362,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-05 11:52:10",
               "state" => "paid",
               "amount" => 4937,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-24 02:00:43",
               "state" => "paid",
               "amount" => 4694,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-11 21:30:46",
               "state" => "pending",
               "amount" => 4014,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-05 18:29:08",
               "state" => "pending",
               "amount" => 1785,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-01 00:24:09",
               "state" => "paid",
               "amount" => 1841,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-13 11:13:08",
               "state" => "pending",
               "amount" => 1927,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-28 07:17:47",
               "state" => "paid",
               "amount" => 3920,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-14 19:33:14",
               "state" => "pending",
               "amount" => 2593,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-07 17:24:58",
               "state" => "paid",
               "amount" => 3106,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-19 02:31:09",
               "state" => "paid",
               "amount" => 3617,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-28 00:50:26",
               "state" => "pending",
               "amount" => 1950,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-04 12:43:17",
               "state" => "paid",
               "amount" => 4333,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-17 23:12:53",
               "state" => "pending",
               "amount" => 1878,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-06 02:08:17",
               "state" => "pending",
               "amount" => 1668,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-17 01:04:20",
               "state" => "pending",
               "amount" => 3975,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-09 00:33:53",
               "state" => "paid",
               "amount" => 3796,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-12 01:29:10",
               "state" => "paid",
               "amount" => 4014,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-29 05:50:41",
               "state" => "pending",
               "amount" => 4821,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-11 16:34:27",
               "state" => "paid",
               "amount" => 4676,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-06 03:57:14",
               "state" => "pending",
               "amount" => 1231,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-12 04:17:00",
               "state" => "paid",
               "amount" => 1079,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-09 22:09:24",
               "state" => "paid",
               "amount" => 3890,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-30 06:57:33",
               "state" => "pending",
               "amount" => 3516,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-18 05:10:24",
               "state" => "paid",
               "amount" => 4471,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-28 22:18:33",
               "state" => "pending",
               "amount" => 2632,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-24 10:16:07",
               "state" => "pending",
               "amount" => 3732,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-05 12:09:27",
               "state" => "pending",
               "amount" => 4031,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-30 10:28:40",
               "state" => "pending",
               "amount" => 2902,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-15 11:17:24",
               "state" => "paid",
               "amount" => 2996,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-10 10:31:45",
               "state" => "pending",
               "amount" => 2241,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-26 05:59:09",
               "state" => "paid",
               "amount" => 4197,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-04 04:06:24",
               "state" => "pending",
               "amount" => 2468,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-18 21:28:30",
               "state" => "paid",
               "amount" => 3664,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-05 17:16:45",
               "state" => "pending",
               "amount" => 1451,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-11 08:34:32",
               "state" => "pending",
               "amount" => 4003,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-10 03:28:58",
               "state" => "paid",
               "amount" => 1677,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-02 13:42:41",
               "state" => "paid",
               "amount" => 1778,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-19 14:56:57",
               "state" => "paid",
               "amount" => 1025,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-28 22:07:33",
               "state" => "paid",
               "amount" => 3644,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-25 14:45:13",
               "state" => "paid",
               "amount" => 1813,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-14 16:29:39",
               "state" => "paid",
               "amount" => 2982,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-03 13:47:03",
               "state" => "pending",
               "amount" => 1823,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-26 10:31:50",
               "state" => "pending",
               "amount" => 4376,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-21 08:03:00",
               "state" => "paid",
               "amount" => 3883,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-19 05:18:57",
               "state" => "pending",
               "amount" => 4700,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-21 09:41:44",
               "state" => "pending",
               "amount" => 2914,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-07 14:00:16",
               "state" => "pending",
               "amount" => 3016,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-24 19:33:54",
               "state" => "pending",
               "amount" => 2341,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-12 16:29:22",
               "state" => "pending",
               "amount" => 4255,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-26 05:47:15",
               "state" => "paid",
               "amount" => 4454,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-29 12:25:00",
               "state" => "pending",
               "amount" => 2565,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-29 14:33:37",
               "state" => "pending",
               "amount" => 2793,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-29 10:57:08",
               "state" => "paid",
               "amount" => 4547,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-20 23:24:43",
               "state" => "pending",
               "amount" => 1205,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-09 01:26:28",
               "state" => "paid",
               "amount" => 2207,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-25 02:20:50",
               "state" => "pending",
               "amount" => 3704,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-08 01:31:59",
               "state" => "paid",
               "amount" => 4404,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-24 22:56:36",
               "state" => "paid",
               "amount" => 2772,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-25 02:58:59",
               "state" => "paid",
               "amount" => 2404,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-24 11:33:13",
               "state" => "paid",
               "amount" => 3432,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-04-30 02:02:49",
               "state" => "paid",
               "amount" => 4726,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-21 05:07:38",
               "state" => "pending",
               "amount" => 3921,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-11 04:16:08",
               "state" => "pending",
               "amount" => 3520,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-21 01:51:04",
               "state" => "paid",
               "amount" => 2634,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-26 04:34:02",
               "state" => "pending",
               "amount" => 1513,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-24 20:17:50",
               "state" => "paid",
               "amount" => 3513,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-06 06:00:45",
               "state" => "paid",
               "amount" => 1482,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-28 17:36:02",
               "state" => "paid",
               "amount" => 3257,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-08 20:34:42",
               "state" => "paid",
               "amount" => 1728,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-11 06:18:39",
               "state" => "paid",
               "amount" => 3916,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-13 04:14:45",
               "state" => "paid",
               "amount" => 4142,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-17 19:26:43",
               "state" => "paid",
               "amount" => 3777,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-16 01:08:24",
               "state" => "pending",
               "amount" => 4412,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-06 14:43:08",
               "state" => "pending",
               "amount" => 1661,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-21 16:13:14",
               "state" => "pending",
               "amount" => 3746,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-17 03:19:54",
               "state" => "paid",
               "amount" => 3449,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 21:13:11",
               "state" => "pending",
               "amount" => 1345,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-20 06:29:16",
               "state" => "pending",
               "amount" => 2954,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-12 08:55:28",
               "state" => "paid",
               "amount" => 3087,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-05 04:53:33",
               "state" => "paid",
               "amount" => 3303,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-07 01:53:07",
               "state" => "paid",
               "amount" => 2952,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-25 10:15:27",
               "state" => "paid",
               "amount" => 4983,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-19 07:17:17",
               "state" => "paid",
               "amount" => 3533,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-18 10:44:15",
               "state" => "paid",
               "amount" => 1672,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-19 05:42:31",
               "state" => "paid",
               "amount" => 1742,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-02 12:09:27",
               "state" => "paid",
               "amount" => 4931,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-22 18:11:46",
               "state" => "paid",
               "amount" => 4238,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-26 02:33:44",
               "state" => "pending",
               "amount" => 4301,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-15 01:44:35",
               "state" => "pending",
               "amount" => 4854,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-28 12:47:25",
               "state" => "pending",
               "amount" => 3305,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-07 05:03:07",
               "state" => "paid",
               "amount" => 2003,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-19 23:34:28",
               "state" => "pending",
               "amount" => 4979,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-28 08:45:42",
               "state" => "pending",
               "amount" => 1744,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-06 23:43:21",
               "state" => "paid",
               "amount" => 4166,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-03 08:56:48",
               "state" => "paid",
               "amount" => 4703,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-14 06:46:53",
               "state" => "pending",
               "amount" => 4087,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-12 05:37:19",
               "state" => "paid",
               "amount" => 4442,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-08 06:48:15",
               "state" => "paid",
               "amount" => 1094,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-18 16:30:05",
               "state" => "pending",
               "amount" => 2468,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-18 02:06:06",
               "state" => "paid",
               "amount" => 4025,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-02 18:51:56",
               "state" => "paid",
               "amount" => 4291,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-20 06:14:59",
               "state" => "paid",
               "amount" => 1611,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-17 21:02:18",
               "state" => "paid",
               "amount" => 2695,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-16 00:46:04",
               "state" => "pending",
               "amount" => 4506,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-16 20:50:51",
               "state" => "paid",
               "amount" => 2337,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-05 23:46:14",
               "state" => "paid",
               "amount" => 1236,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-22 00:48:05",
               "state" => "paid",
               "amount" => 4903,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-18 05:00:43",
               "state" => "pending",
               "amount" => 4677,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-13 13:29:30",
               "state" => "paid",
               "amount" => 4416,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-04 14:28:42",
               "state" => "pending",
               "amount" => 2583,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-08 21:04:17",
               "state" => "paid",
               "amount" => 2702,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-08 18:57:04",
               "state" => "paid",
               "amount" => 4218,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-31 17:17:01",
               "state" => "pending",
               "amount" => 1429,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-20 17:55:00",
               "state" => "pending",
               "amount" => 1358,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-17 21:05:36",
               "state" => "pending",
               "amount" => 3775,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-15 14:05:39",
               "state" => "pending",
               "amount" => 3227,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 03:47:22",
               "state" => "pending",
               "amount" => 4815,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-21 04:29:51",
               "state" => "paid",
               "amount" => 4880,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-04 05:31:54",
               "state" => "paid",
               "amount" => 3856,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-20 07:15:06",
               "state" => "pending",
               "amount" => 1151,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-19 05:23:35",
               "state" => "paid",
               "amount" => 3067,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-08 19:21:37",
               "state" => "paid",
               "amount" => 1408,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-21 23:32:58",
               "state" => "paid",
               "amount" => 2007,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-10 16:50:08",
               "state" => "pending",
               "amount" => 1506,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-20 15:37:18",
               "state" => "paid",
               "amount" => 4725,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-02 01:13:45",
               "state" => "pending",
               "amount" => 3459,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-24 07:59:42",
               "state" => "paid",
               "amount" => 4583,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-28 09:15:02",
               "state" => "pending",
               "amount" => 3095,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-24 21:29:04",
               "state" => "pending",
               "amount" => 3653,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-22 00:18:43",
               "state" => "paid",
               "amount" => 3209,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-14 05:37:41",
               "state" => "paid",
               "amount" => 3619,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-14 14:48:37",
               "state" => "paid",
               "amount" => 4450,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-05 13:39:06",
               "state" => "paid",
               "amount" => 4875,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-21 01:55:55",
               "state" => "paid",
               "amount" => 2055,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-04 10:37:10",
               "state" => "pending",
               "amount" => 3298,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-04-30 09:24:13",
               "state" => "paid",
               "amount" => 4308,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-21 02:53:49",
               "state" => "paid",
               "amount" => 2732,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-12 10:39:52",
               "state" => "paid",
               "amount" => 2395,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-22 14:18:01",
               "state" => "paid",
               "amount" => 4981,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-15 19:40:20",
               "state" => "paid",
               "amount" => 2102,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-10 10:26:39",
               "state" => "pending",
               "amount" => 2009,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-19 09:48:45",
               "state" => "paid",
               "amount" => 4165,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-28 12:04:43",
               "state" => "pending",
               "amount" => 3588,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-12 11:40:18",
               "state" => "pending",
               "amount" => 3518,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-08 07:12:50",
               "state" => "pending",
               "amount" => 1004,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-09 11:01:40",
               "state" => "pending",
               "amount" => 3915,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-09 04:47:21",
               "state" => "pending",
               "amount" => 4210,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-17 06:47:24",
               "state" => "paid",
               "amount" => 2228,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-03 06:10:57",
               "state" => "paid",
               "amount" => 2217,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-23 22:10:25",
               "state" => "pending",
               "amount" => 2684,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-12 15:08:51",
               "state" => "pending",
               "amount" => 4021,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 23:54:17",
               "state" => "paid",
               "amount" => 2125,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-20 06:44:17",
               "state" => "paid",
               "amount" => 3161,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-13 07:55:34",
               "state" => "paid",
               "amount" => 3309,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-14 17:42:55",
               "state" => "paid",
               "amount" => 4125,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-02 02:11:08",
               "state" => "paid",
               "amount" => 4875,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-06 02:41:25",
               "state" => "pending",
               "amount" => 3569,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-25 18:17:42",
               "state" => "pending",
               "amount" => 2884,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-01 20:05:30",
               "state" => "paid",
               "amount" => 3794,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-29 11:53:11",
               "state" => "paid",
               "amount" => 1127,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-01 00:58:04",
               "state" => "pending",
               "amount" => 2438,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-09 12:47:39",
               "state" => "paid",
               "amount" => 1586,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-19 02:24:50",
               "state" => "paid",
               "amount" => 1358,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-22 01:14:30",
               "state" => "pending",
               "amount" => 2708,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-06 09:06:44",
               "state" => "paid",
               "amount" => 2604,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-24 11:43:29",
               "state" => "paid",
               "amount" => 4710,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-06 06:35:51",
               "state" => "paid",
               "amount" => 3573,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-24 02:49:50",
               "state" => "pending",
               "amount" => 3792,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-10 11:03:47",
               "state" => "pending",
               "amount" => 1863,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-21 21:26:05",
               "state" => "pending",
               "amount" => 4959,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-09 05:48:52",
               "state" => "pending",
               "amount" => 2284,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-29 04:10:43",
               "state" => "pending",
               "amount" => 2776,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-13 23:41:44",
               "state" => "pending",
               "amount" => 4300,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-31 13:09:06",
               "state" => "pending",
               "amount" => 4591,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-18 01:29:25",
               "state" => "paid",
               "amount" => 3473,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-01 12:11:45",
               "state" => "paid",
               "amount" => 2815,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-01 15:20:27",
               "state" => "pending",
               "amount" => 3884,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-06 23:21:12",
               "state" => "pending",
               "amount" => 4158,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-24 23:39:25",
               "state" => "pending",
               "amount" => 1902,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-26 12:11:44",
               "state" => "pending",
               "amount" => 3686,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-31 18:31:54",
               "state" => "pending",
               "amount" => 4347,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-24 03:45:18",
               "state" => "pending",
               "amount" => 4102,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-21 07:24:14",
               "state" => "paid",
               "amount" => 2327,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-05 22:49:26",
               "state" => "paid",
               "amount" => 2526,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-25 22:15:05",
               "state" => "pending",
               "amount" => 1513,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-04 17:47:34",
               "state" => "paid",
               "amount" => 2542,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-27 04:29:28",
               "state" => "paid",
               "amount" => 4381,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-30 07:38:07",
               "state" => "pending",
               "amount" => 1634,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-21 19:54:16",
               "state" => "pending",
               "amount" => 3382,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-26 22:45:25",
               "state" => "pending",
               "amount" => 3674,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-15 21:33:17",
               "state" => "pending",
               "amount" => 3681,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-28 23:38:55",
               "state" => "paid",
               "amount" => 3059,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-20 01:53:13",
               "state" => "pending",
               "amount" => 4639,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-05 10:57:33",
               "state" => "pending",
               "amount" => 3290,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-04 17:42:29",
               "state" => "paid",
               "amount" => 2745,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-22 13:02:54",
               "state" => "pending",
               "amount" => 2936,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-05 23:14:33",
               "state" => "paid",
               "amount" => 1230,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-06 15:33:06",
               "state" => "paid",
               "amount" => 2898,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-08 02:22:20",
               "state" => "pending",
               "amount" => 3749,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-02 01:11:54",
               "state" => "paid",
               "amount" => 1853,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-25 23:48:11",
               "state" => "paid",
               "amount" => 4962,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-12 21:03:52",
               "state" => "pending",
               "amount" => 4033,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-16 08:11:57",
               "state" => "pending",
               "amount" => 4070,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-17 19:03:18",
               "state" => "pending",
               "amount" => 3018,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-08 13:50:20",
               "state" => "pending",
               "amount" => 1807,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-01 21:17:02",
               "state" => "paid",
               "amount" => 4260,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-23 23:49:22",
               "state" => "paid",
               "amount" => 2635,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-10 11:44:47",
               "state" => "paid",
               "amount" => 2822,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-05 15:30:50",
               "state" => "pending",
               "amount" => 4667,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-24 04:43:54",
               "state" => "pending",
               "amount" => 4560,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-04 14:39:35",
               "state" => "paid",
               "amount" => 3490,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-07 13:46:44",
               "state" => "paid",
               "amount" => 3517,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-18 09:15:04",
               "state" => "paid",
               "amount" => 1129,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-25 05:42:26",
               "state" => "paid",
               "amount" => 2481,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-28 02:18:10",
               "state" => "paid",
               "amount" => 3506,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-13 07:53:01",
               "state" => "paid",
               "amount" => 1569,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-13 03:38:17",
               "state" => "pending",
               "amount" => 1292,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-19 20:38:41",
               "state" => "paid",
               "amount" => 2837,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-27 21:09:52",
               "state" => "pending",
               "amount" => 2522,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-04-30 22:47:03",
               "state" => "paid",
               "amount" => 3419,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-06 13:04:41",
               "state" => "pending",
               "amount" => 2576,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-02 18:14:04",
               "state" => "pending",
               "amount" => 2913,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-16 17:28:28",
               "state" => "paid",
               "amount" => 2381,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-18 04:47:38",
               "state" => "pending",
               "amount" => 4386,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-13 04:02:31",
               "state" => "paid",
               "amount" => 4948,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-09 15:30:28",
               "state" => "paid",
               "amount" => 2564,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-08 01:33:35",
               "state" => "pending",
               "amount" => 1054,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-15 13:05:04",
               "state" => "paid",
               "amount" => 2500,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-10 11:53:47",
               "state" => "pending",
               "amount" => 3400,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-03 07:05:02",
               "state" => "pending",
               "amount" => 4738,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-29 06:06:56",
               "state" => "paid",
               "amount" => 1207,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-10 17:11:51",
               "state" => "paid",
               "amount" => 3287,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-04 16:27:02",
               "state" => "paid",
               "amount" => 3499,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-23 00:11:11",
               "state" => "paid",
               "amount" => 1175,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-22 04:55:04",
               "state" => "paid",
               "amount" => 4677,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-22 14:14:56",
               "state" => "paid",
               "amount" => 3493,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-29 10:55:28",
               "state" => "paid",
               "amount" => 3536,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-16 09:18:07",
               "state" => "paid",
               "amount" => 2795,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-25 19:07:29",
               "state" => "pending",
               "amount" => 4576,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 20:28:25",
               "state" => "pending",
               "amount" => 3947,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-12 08:44:39",
               "state" => "paid",
               "amount" => 4637,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-16 07:12:43",
               "state" => "pending",
               "amount" => 2256,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-18 10:43:20",
               "state" => "pending",
               "amount" => 3185,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-05 22:28:07",
               "state" => "paid",
               "amount" => 1590,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-18 11:03:51",
               "state" => "pending",
               "amount" => 4838,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-27 03:45:34",
               "state" => "paid",
               "amount" => 4261,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-29 05:04:08",
               "state" => "paid",
               "amount" => 2347,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-10 01:10:17",
               "state" => "paid",
               "amount" => 2599,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-15 08:27:48",
               "state" => "pending",
               "amount" => 1014,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-28 20:56:48",
               "state" => "paid",
               "amount" => 2899,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-13 20:11:13",
               "state" => "pending",
               "amount" => 2763,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-05 19:37:33",
               "state" => "paid",
               "amount" => 1203,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-21 02:28:18",
               "state" => "paid",
               "amount" => 2701,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-14 01:27:53",
               "state" => "paid",
               "amount" => 4846,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-11 12:11:33",
               "state" => "pending",
               "amount" => 1397,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-06 09:59:38",
               "state" => "pending",
               "amount" => 2097,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-05 01:00:06",
               "state" => "paid",
               "amount" => 4390,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-29 00:12:37",
               "state" => "paid",
               "amount" => 2120,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-01 08:19:19",
               "state" => "pending",
               "amount" => 1317,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-24 03:31:26",
               "state" => "pending",
               "amount" => 2632,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-08 04:52:17",
               "state" => "pending",
               "amount" => 2544,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-17 17:20:14",
               "state" => "pending",
               "amount" => 3961,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-06 18:04:22",
               "state" => "pending",
               "amount" => 3286,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-26 17:21:29",
               "state" => "pending",
               "amount" => 4634,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-15 05:19:28",
               "state" => "paid",
               "amount" => 1444,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-12 12:43:34",
               "state" => "pending",
               "amount" => 4100,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-24 15:43:36",
               "state" => "paid",
               "amount" => 2893,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-26 13:40:25",
               "state" => "pending",
               "amount" => 3620,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-04-30 21:34:10",
               "state" => "paid",
               "amount" => 2481,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-22 22:17:22",
               "state" => "paid",
               "amount" => 3612,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-17 18:15:23",
               "state" => "pending",
               "amount" => 1355,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-20 09:40:32",
               "state" => "paid",
               "amount" => 4683,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-18 03:45:14",
               "state" => "pending",
               "amount" => 1662,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-15 21:34:26",
               "state" => "pending",
               "amount" => 1177,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-17 07:48:15",
               "state" => "pending",
               "amount" => 3217,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-26 12:12:44",
               "state" => "pending",
               "amount" => 2984,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-13 19:58:01",
               "state" => "pending",
               "amount" => 3484,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-03 02:53:14",
               "state" => "paid",
               "amount" => 1444,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-08 23:25:30",
               "state" => "paid",
               "amount" => 2167,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-08 14:58:27",
               "state" => "pending",
               "amount" => 3512,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-20 02:04:36",
               "state" => "paid",
               "amount" => 2900,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-03 10:22:59",
               "state" => "paid",
               "amount" => 2278,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-03 21:30:23",
               "state" => "pending",
               "amount" => 3176,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-01 19:34:47",
               "state" => "paid",
               "amount" => 1404,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-01 23:03:22",
               "state" => "pending",
               "amount" => 3141,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-11 21:08:27",
               "state" => "pending",
               "amount" => 2914,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-04 18:31:43",
               "state" => "pending",
               "amount" => 4695,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-01 01:32:47",
               "state" => "pending",
               "amount" => 3491,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-06 00:14:17",
               "state" => "pending",
               "amount" => 4237,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-01 19:08:21",
               "state" => "pending",
               "amount" => 4858,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-22 19:34:16",
               "state" => "paid",
               "amount" => 4331,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-22 23:04:05",
               "state" => "pending",
               "amount" => 3942,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-31 14:25:54",
               "state" => "pending",
               "amount" => 3267,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-10 04:45:20",
               "state" => "pending",
               "amount" => 4537,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-04 21:43:46",
               "state" => "pending",
               "amount" => 1443,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-08 13:05:18",
               "state" => "paid",
               "amount" => 1043,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-17 01:24:45",
               "state" => "pending",
               "amount" => 4232,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-12 05:58:43",
               "state" => "paid",
               "amount" => 2309,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-20 21:11:04",
               "state" => "pending",
               "amount" => 4516,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-30 02:21:44",
               "state" => "pending",
               "amount" => 4840,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-02 15:20:57",
               "state" => "pending",
               "amount" => 4857,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-10 22:16:52",
               "state" => "paid",
               "amount" => 4185,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-28 02:40:39",
               "state" => "pending",
               "amount" => 1039,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-04 11:49:33",
               "state" => "paid",
               "amount" => 2299,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-01 17:18:59",
               "state" => "paid",
               "amount" => 2158,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-21 06:08:45",
               "state" => "paid",
               "amount" => 1809,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-03 10:58:15",
               "state" => "pending",
               "amount" => 3370,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-03 22:39:09",
               "state" => "paid",
               "amount" => 4762,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-04-29 20:27:36",
               "state" => "paid",
               "amount" => 3519,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-04-30 08:12:52",
               "state" => "paid",
               "amount" => 3246,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-21 12:57:30",
               "state" => "pending",
               "amount" => 4267,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-07 17:51:15",
               "state" => "pending",
               "amount" => 3465,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-26 12:28:04",
               "state" => "pending",
               "amount" => 3626,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-03 05:49:52",
               "state" => "pending",
               "amount" => 3843,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-20 06:14:51",
               "state" => "pending",
               "amount" => 2650,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-04 11:03:39",
               "state" => "paid",
               "amount" => 2401,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-21 21:18:46",
               "state" => "paid",
               "amount" => 2798,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-01 02:37:38",
               "state" => "paid",
               "amount" => 3711,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-15 21:00:32",
               "state" => "pending",
               "amount" => 4117,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-25 12:28:29",
               "state" => "pending",
               "amount" => 4503,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-13 10:14:50",
               "state" => "pending",
               "amount" => 3006,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-10 11:13:31",
               "state" => "paid",
               "amount" => 1020,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-13 15:39:08",
               "state" => "paid",
               "amount" => 2011,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-02 17:08:54",
               "state" => "paid",
               "amount" => 3615,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-25 03:29:37",
               "state" => "paid",
               "amount" => 4507,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-08 23:11:31",
               "state" => "paid",
               "amount" => 3305,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-18 08:50:45",
               "state" => "pending",
               "amount" => 4972,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-29 18:56:32",
               "state" => "pending",
               "amount" => 4563,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-07 13:24:32",
               "state" => "pending",
               "amount" => 3905,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-05 23:22:39",
               "state" => "pending",
               "amount" => 2588,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-06 10:31:50",
               "state" => "paid",
               "amount" => 1498,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-05 11:15:21",
               "state" => "paid",
               "amount" => 4997,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-24 02:56:25",
               "state" => "paid",
               "amount" => 2128,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-14 22:35:09",
               "state" => "paid",
               "amount" => 2730,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-04 08:04:09",
               "state" => "paid",
               "amount" => 2021,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-06 14:59:56",
               "state" => "paid",
               "amount" => 1040,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-27 21:09:49",
               "state" => "pending",
               "amount" => 1618,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-27 11:54:15",
               "state" => "pending",
               "amount" => 4330,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-28 09:43:35",
               "state" => "pending",
               "amount" => 2188,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-05 21:37:10",
               "state" => "pending",
               "amount" => 1618,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-07 15:42:27",
               "state" => "paid",
               "amount" => 1498,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-13 03:23:02",
               "state" => "pending",
               "amount" => 4533,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-09 04:06:40",
               "state" => "paid",
               "amount" => 4217,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-29 00:44:11",
               "state" => "paid",
               "amount" => 3206,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-16 03:50:55",
               "state" => "pending",
               "amount" => 3754,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-20 16:48:38",
               "state" => "pending",
               "amount" => 3928,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 22:57:03",
               "state" => "paid",
               "amount" => 3187,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-10 12:29:21",
               "state" => "paid",
               "amount" => 2096,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-07 04:37:54",
               "state" => "pending",
               "amount" => 3831,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-13 10:32:18",
               "state" => "pending",
               "amount" => 2443,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-15 01:09:16",
               "state" => "paid",
               "amount" => 1452,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-27 18:46:13",
               "state" => "paid",
               "amount" => 2493,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-20 01:32:21",
               "state" => "paid",
               "amount" => 4945,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-05 04:47:18",
               "state" => "pending",
               "amount" => 4942,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-24 20:50:18",
               "state" => "pending",
               "amount" => 2998,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-02 02:26:47",
               "state" => "paid",
               "amount" => 2208,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-05 12:22:06",
               "state" => "paid",
               "amount" => 2853,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-04-30 18:42:39",
               "state" => "paid",
               "amount" => 4379,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-10 08:56:17",
               "state" => "pending",
               "amount" => 4969,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-04-29 20:03:04",
               "state" => "paid",
               "amount" => 1429,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-29 18:39:18",
               "state" => "pending",
               "amount" => 1380,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-05 09:38:27",
               "state" => "paid",
               "amount" => 3266,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-05 00:11:47",
               "state" => "paid",
               "amount" => 4114,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-18 01:17:42",
               "state" => "paid",
               "amount" => 1836,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-23 04:56:39",
               "state" => "paid",
               "amount" => 3312,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-23 23:50:16",
               "state" => "pending",
               "amount" => 1037,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-14 11:42:44",
               "state" => "pending",
               "amount" => 1320,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-19 23:03:28",
               "state" => "pending",
               "amount" => 3399,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-09 22:17:33",
               "state" => "pending",
               "amount" => 3345,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-26 00:28:04",
               "state" => "paid",
               "amount" => 2058,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-30 09:14:29",
               "state" => "pending",
               "amount" => 1378,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-12 20:49:48",
               "state" => "paid",
               "amount" => 3467,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-22 08:10:12",
               "state" => "pending",
               "amount" => 1691,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-19 19:15:48",
               "state" => "paid",
               "amount" => 3045,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-19 05:48:28",
               "state" => "paid",
               "amount" => 1504,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-22 10:48:39",
               "state" => "pending",
               "amount" => 4131,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-17 09:24:36",
               "state" => "paid",
               "amount" => 4385,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-04-29 22:26:10",
               "state" => "paid",
               "amount" => 1264,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-16 23:15:13",
               "state" => "pending",
               "amount" => 2685,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-23 05:00:41",
               "state" => "paid",
               "amount" => 3712,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-01 05:48:50",
               "state" => "paid",
               "amount" => 3415,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-10 10:05:36",
               "state" => "pending",
               "amount" => 3141,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-08 14:23:14",
               "state" => "paid",
               "amount" => 4329,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-08 19:35:33",
               "state" => "paid",
               "amount" => 4481,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-03 22:26:19",
               "state" => "pending",
               "amount" => 4495,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-12 15:16:55",
               "state" => "paid",
               "amount" => 3715,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-05 09:39:43",
               "state" => "paid",
               "amount" => 2395,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-05 18:31:13",
               "state" => "paid",
               "amount" => 1878,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-29 09:59:55",
               "state" => "pending",
               "amount" => 2325,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-17 00:46:35",
               "state" => "pending",
               "amount" => 3431,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-18 06:09:45",
               "state" => "pending",
               "amount" => 4691,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-04 21:46:43",
               "state" => "paid",
               "amount" => 4073,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-04 10:54:48",
               "state" => "pending",
               "amount" => 2987,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-03 19:27:11",
               "state" => "paid",
               "amount" => 4088,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-08 09:34:42",
               "state" => "pending",
               "amount" => 3773,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-24 22:19:17",
               "state" => "paid",
               "amount" => 3693,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-11 03:05:19",
               "state" => "pending",
               "amount" => 4441,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-03 09:32:45",
               "state" => "pending",
               "amount" => 3565,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-04-30 11:37:52",
               "state" => "paid",
               "amount" => 1570,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-23 04:26:02",
               "state" => "pending",
               "amount" => 3082,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-27 23:27:01",
               "state" => "pending",
               "amount" => 1919,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-25 23:52:08",
               "state" => "paid",
               "amount" => 4053,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-26 15:35:11",
               "state" => "pending",
               "amount" => 3081,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-04-29 19:33:03",
               "state" => "paid",
               "amount" => 1103,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-08 23:09:51",
               "state" => "paid",
               "amount" => 2448,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-22 07:59:07",
               "state" => "pending",
               "amount" => 1720,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-15 19:37:44",
               "state" => "pending",
               "amount" => 3695,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-18 15:22:25",
               "state" => "paid",
               "amount" => 1438,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-04 02:37:41",
               "state" => "paid",
               "amount" => 4061,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-08 17:55:05",
               "state" => "pending",
               "amount" => 1817,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-13 15:00:11",
               "state" => "paid",
               "amount" => 2641,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-09 12:26:20",
               "state" => "paid",
               "amount" => 4417,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-28 23:45:15",
               "state" => "paid",
               "amount" => 4316,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-19 04:39:36",
               "state" => "paid",
               "amount" => 2906,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-01 12:22:10",
               "state" => "paid",
               "amount" => 2297,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-18 22:13:47",
               "state" => "pending",
               "amount" => 2928,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-28 21:48:58",
               "state" => "paid",
               "amount" => 2857,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-01 22:57:26",
               "state" => "paid",
               "amount" => 3253,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-14 16:34:45",
               "state" => "pending",
               "amount" => 2588,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-02 04:14:08",
               "state" => "pending",
               "amount" => 2944,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-23 12:42:33",
               "state" => "paid",
               "amount" => 4677,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-13 07:18:54",
               "state" => "pending",
               "amount" => 1631,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-14 14:36:38",
               "state" => "paid",
               "amount" => 3517,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-12 01:58:32",
               "state" => "pending",
               "amount" => 2980,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-10 12:41:12",
               "state" => "pending",
               "amount" => 4478,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-17 02:39:42",
               "state" => "paid",
               "amount" => 3533,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-04 23:09:13",
               "state" => "paid",
               "amount" => 4203,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-01 16:01:19",
               "state" => "pending",
               "amount" => 3482,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-30 01:10:47",
               "state" => "pending",
               "amount" => 2343,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-05 01:04:07",
               "state" => "paid",
               "amount" => 4873,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-20 13:07:04",
               "state" => "pending",
               "amount" => 2145,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-19 06:40:18",
               "state" => "pending",
               "amount" => 4041,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-02 10:15:10",
               "state" => "paid",
               "amount" => 1833,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-13 00:04:01",
               "state" => "pending",
               "amount" => 2650,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-27 01:23:49",
               "state" => "pending",
               "amount" => 4375,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-23 07:02:53",
               "state" => "pending",
               "amount" => 3040,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-04-30 20:52:15",
               "state" => "paid",
               "amount" => 1303,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-17 07:38:36",
               "state" => "paid",
               "amount" => 1287,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-05 08:17:00",
               "state" => "pending",
               "amount" => 2181,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-26 12:25:32",
               "state" => "paid",
               "amount" => 2735,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-27 00:15:37",
               "state" => "pending",
               "amount" => 4686,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-04 10:10:11",
               "state" => "pending",
               "amount" => 3607,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-22 12:01:01",
               "state" => "pending",
               "amount" => 3789,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-29 04:59:57",
               "state" => "pending",
               "amount" => 2736,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-27 19:40:50",
               "state" => "pending",
               "amount" => 2955,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-25 13:54:00",
               "state" => "pending",
               "amount" => 2296,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-08 11:26:30",
               "state" => "paid",
               "amount" => 1968,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-02 23:03:55",
               "state" => "paid",
               "amount" => 3778,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-09 17:44:25",
               "state" => "pending",
               "amount" => 2322,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-17 17:52:26",
               "state" => "paid",
               "amount" => 2494,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-24 23:30:04",
               "state" => "paid",
               "amount" => 1939,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-23 13:44:32",
               "state" => "pending",
               "amount" => 3346,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-23 02:46:18",
               "state" => "paid",
               "amount" => 1456,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-27 01:49:33",
               "state" => "pending",
               "amount" => 2003,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-18 04:21:00",
               "state" => "paid",
               "amount" => 3524,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-25 15:56:55",
               "state" => "paid",
               "amount" => 2193,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-16 03:44:55",
               "state" => "paid",
               "amount" => 4286,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-13 20:38:53",
               "state" => "paid",
               "amount" => 2627,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-19 10:20:35",
               "state" => "pending",
               "amount" => 3678,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-23 14:09:14",
               "state" => "paid",
               "amount" => 3300,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-03 05:23:59",
               "state" => "paid",
               "amount" => 4050,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-02 16:20:26",
               "state" => "paid",
               "amount" => 2834,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-12 20:59:23",
               "state" => "paid",
               "amount" => 2538,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-11 04:32:37",
               "state" => "pending",
               "amount" => 4082,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-17 00:52:52",
               "state" => "pending",
               "amount" => 1919,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-14 15:46:43",
               "state" => "pending",
               "amount" => 3072,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-01 23:18:47",
               "state" => "paid",
               "amount" => 4264,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-20 23:13:03",
               "state" => "paid",
               "amount" => 3036,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-25 11:56:29",
               "state" => "pending",
               "amount" => 3949,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-16 02:43:13",
               "state" => "paid",
               "amount" => 4554,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-10 05:39:08",
               "state" => "pending",
               "amount" => 4437,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-23 21:02:09",
               "state" => "paid",
               "amount" => 2414,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-04 02:38:37",
               "state" => "paid",
               "amount" => 4410,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-20 00:23:06",
               "state" => "pending",
               "amount" => 2144,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-24 16:47:30",
               "state" => "paid",
               "amount" => 2725,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-05 00:49:59",
               "state" => "paid",
               "amount" => 2792,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-11 19:09:37",
               "state" => "paid",
               "amount" => 3174,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-02 01:55:47",
               "state" => "pending",
               "amount" => 3853,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-16 05:42:16",
               "state" => "pending",
               "amount" => 1936,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-29 06:24:14",
               "state" => "pending",
               "amount" => 2145,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-25 11:42:54",
               "state" => "pending",
               "amount" => 1217,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-02 20:42:48",
               "state" => "pending",
               "amount" => 1110,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-22 12:23:39",
               "state" => "pending",
               "amount" => 1957,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-21 05:20:48",
               "state" => "pending",
               "amount" => 1505,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-09 20:02:13",
               "state" => "paid",
               "amount" => 4277,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-24 09:38:31",
               "state" => "paid",
               "amount" => 2258,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-13 06:55:11",
               "state" => "pending",
               "amount" => 3743,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-24 04:58:18",
               "state" => "pending",
               "amount" => 3355,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-04 03:07:09",
               "state" => "paid",
               "amount" => 4465,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-19 02:10:06",
               "state" => "paid",
               "amount" => 2944,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-12 21:43:46",
               "state" => "paid",
               "amount" => 4034,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-23 23:18:47",
               "state" => "pending",
               "amount" => 1830,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-24 11:15:59",
               "state" => "paid",
               "amount" => 1938,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-09 23:24:08",
               "state" => "pending",
               "amount" => 3950,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-04-30 10:04:02",
               "state" => "paid",
               "amount" => 2149,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-23 06:34:41",
               "state" => "pending",
               "amount" => 1210,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-13 00:38:58",
               "state" => "paid",
               "amount" => 2039,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 15:12:31",
               "state" => "paid",
               "amount" => 4367,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-22 07:52:13",
               "state" => "paid",
               "amount" => 2640,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-31 22:00:27",
               "state" => "pending",
               "amount" => 1600,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 20:16:54",
               "state" => "pending",
               "amount" => 2655,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-01 14:21:27",
               "state" => "pending",
               "amount" => 1434,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-26 05:33:37",
               "state" => "paid",
               "amount" => 4744,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-02 08:12:59",
               "state" => "paid",
               "amount" => 4700,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-12 20:14:21",
               "state" => "pending",
               "amount" => 4423,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-08 19:34:56",
               "state" => "paid",
               "amount" => 3077,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-04 05:39:37",
               "state" => "pending",
               "amount" => 4642,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-20 12:40:42",
               "state" => "pending",
               "amount" => 3801,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-17 23:39:51",
               "state" => "paid",
               "amount" => 1000,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-22 15:01:11",
               "state" => "paid",
               "amount" => 3770,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-18 01:02:04",
               "state" => "paid",
               "amount" => 2520,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-27 09:36:15",
               "state" => "pending",
               "amount" => 4075,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-07 04:03:31",
               "state" => "pending",
               "amount" => 4693,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-11 10:48:16",
               "state" => "paid",
               "amount" => 1500,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-27 03:46:39",
               "state" => "pending",
               "amount" => 4632,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-13 01:41:55",
               "state" => "pending",
               "amount" => 1901,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-12 04:26:58",
               "state" => "paid",
               "amount" => 3983,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-07 04:14:51",
               "state" => "paid",
               "amount" => 3492,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-10 09:55:40",
               "state" => "pending",
               "amount" => 2561,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-02 23:42:02",
               "state" => "paid",
               "amount" => 1638,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-11 19:26:27",
               "state" => "pending",
               "amount" => 4132,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-09 05:18:17",
               "state" => "paid",
               "amount" => 1545,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-17 10:03:37",
               "state" => "paid",
               "amount" => 2517,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-13 11:42:51",
               "state" => "paid",
               "amount" => 3866,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-21 04:14:01",
               "state" => "pending",
               "amount" => 1526,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-17 02:17:43",
               "state" => "pending",
               "amount" => 3892,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-04 03:21:03",
               "state" => "pending",
               "amount" => 2578,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-22 12:16:29",
               "state" => "pending",
               "amount" => 2604,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-26 23:08:58",
               "state" => "paid",
               "amount" => 3517,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-05 01:01:01",
               "state" => "pending",
               "amount" => 1710,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-22 01:19:16",
               "state" => "pending",
               "amount" => 1111,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-03 11:17:44",
               "state" => "paid",
               "amount" => 2070,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-19 07:22:05",
               "state" => "paid",
               "amount" => 2042,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-25 07:48:53",
               "state" => "paid",
               "amount" => 1024,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-02 10:00:45",
               "state" => "pending",
               "amount" => 1125,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-28 16:48:14",
               "state" => "pending",
               "amount" => 3666,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-09 09:36:05",
               "state" => "paid",
               "amount" => 1265,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-25 22:47:43",
               "state" => "pending",
               "amount" => 4300,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-04 17:04:05",
               "state" => "pending",
               "amount" => 3319,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-29 02:15:16",
               "state" => "pending",
               "amount" => 3515,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-20 19:03:18",
               "state" => "pending",
               "amount" => 4007,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-03 01:05:38",
               "state" => "pending",
               "amount" => 2279,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-22 00:10:21",
               "state" => "pending",
               "amount" => 1430,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-21 11:46:13",
               "state" => "paid",
               "amount" => 4219,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-20 19:04:41",
               "state" => "paid",
               "amount" => 1082,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-18 21:38:42",
               "state" => "pending",
               "amount" => 4513,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-13 21:56:04",
               "state" => "pending",
               "amount" => 1085,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-06 07:56:54",
               "state" => "paid",
               "amount" => 3690,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-04 01:24:44",
               "state" => "paid",
               "amount" => 1747,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-14 16:18:42",
               "state" => "paid",
               "amount" => 1599,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-08 23:45:21",
               "state" => "pending",
               "amount" => 2497,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-27 19:25:28",
               "state" => "pending",
               "amount" => 3467,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-01 06:03:15",
               "state" => "pending",
               "amount" => 2174,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-22 17:29:57",
               "state" => "pending",
               "amount" => 2782,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-14 09:33:51",
               "state" => "pending",
               "amount" => 1242,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-20 16:59:49",
               "state" => "pending",
               "amount" => 3277,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-12 00:03:21",
               "state" => "pending",
               "amount" => 2379,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-27 08:33:06",
               "state" => "pending",
               "amount" => 2050,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-04-30 23:45:51",
               "state" => "paid",
               "amount" => 3849,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-18 22:17:00",
               "state" => "pending",
               "amount" => 3457,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-21 13:26:24",
               "state" => "pending",
               "amount" => 3596,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-06 22:44:01",
               "state" => "pending",
               "amount" => 4275,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-21 12:39:10",
               "state" => "paid",
               "amount" => 1754,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-26 13:30:48",
               "state" => "paid",
               "amount" => 4142,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-03 05:47:28",
               "state" => "paid",
               "amount" => 3820,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-14 00:28:12",
               "state" => "pending",
               "amount" => 3283,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-19 16:54:34",
               "state" => "paid",
               "amount" => 1877,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-24 18:52:54",
               "state" => "pending",
               "amount" => 2066,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-06 08:27:04",
               "state" => "pending",
               "amount" => 1592,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-21 00:15:32",
               "state" => "pending",
               "amount" => 1311,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-07 23:06:27",
               "state" => "paid",
               "amount" => 2635,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-23 09:23:37",
               "state" => "pending",
               "amount" => 3447,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-05 06:38:03",
               "state" => "pending",
               "amount" => 4290,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-26 18:56:30",
               "state" => "paid",
               "amount" => 2193,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-03 05:27:06",
               "state" => "pending",
               "amount" => 1898,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-04 22:13:32",
               "state" => "paid",
               "amount" => 1931,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-28 18:58:29",
               "state" => "pending",
               "amount" => 4324,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-14 13:42:41",
               "state" => "paid",
               "amount" => 3865,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-01 15:32:48",
               "state" => "paid",
               "amount" => 4626,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-29 05:12:04",
               "state" => "paid",
               "amount" => 4648,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-23 19:16:05",
               "state" => "pending",
               "amount" => 3753,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-15 19:26:54",
               "state" => "pending",
               "amount" => 3939,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-15 15:10:46",
               "state" => "pending",
               "amount" => 3719,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-06 15:28:31",
               "state" => "paid",
               "amount" => 3895,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-02 19:55:44",
               "state" => "pending",
               "amount" => 2675,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-08 04:15:53",
               "state" => "paid",
               "amount" => 2063,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-16 15:29:07",
               "state" => "pending",
               "amount" => 2925,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-08 19:08:23",
               "state" => "pending",
               "amount" => 3446,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-05 20:48:46",
               "state" => "paid",
               "amount" => 4354,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-12 02:13:53",
               "state" => "pending",
               "amount" => 4309,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-19 16:51:35",
               "state" => "paid",
               "amount" => 3807,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-08 20:12:45",
               "state" => "paid",
               "amount" => 1994,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-20 22:58:13",
               "state" => "pending",
               "amount" => 3339,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-26 02:35:37",
               "state" => "paid",
               "amount" => 4099,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-23 23:25:08",
               "state" => "paid",
               "amount" => 2703,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-08 21:05:02",
               "state" => "paid",
               "amount" => 3170,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-06 07:46:02",
               "state" => "pending",
               "amount" => 2010,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-28 05:31:15",
               "state" => "paid",
               "amount" => 2594,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-02 16:50:31",
               "state" => "pending",
               "amount" => 1769,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-27 10:12:32",
               "state" => "paid",
               "amount" => 2950,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-04 19:13:00",
               "state" => "paid",
               "amount" => 3458,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-29 00:45:46",
               "state" => "paid",
               "amount" => 2090,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-22 08:18:47",
               "state" => "paid",
               "amount" => 2853,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-02 13:55:20",
               "state" => "paid",
               "amount" => 2260,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-08 00:37:53",
               "state" => "paid",
               "amount" => 2502,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-15 07:24:01",
               "state" => "paid",
               "amount" => 1166,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-12 08:25:19",
               "state" => "pending",
               "amount" => 4441,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-21 22:01:54",
               "state" => "pending",
               "amount" => 4977,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-01 18:01:51",
               "state" => "paid",
               "amount" => 4479,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-08 16:17:06",
               "state" => "pending",
               "amount" => 3523,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-24 23:47:10",
               "state" => "paid",
               "amount" => 2131,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-17 21:40:54",
               "state" => "paid",
               "amount" => 3762,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-09 04:36:58",
               "state" => "paid",
               "amount" => 4521,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-04 00:06:50",
               "state" => "paid",
               "amount" => 1780,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-29 03:29:33",
               "state" => "paid",
               "amount" => 4822,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-04-30 22:26:23",
               "state" => "paid",
               "amount" => 4904,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-03 03:14:03",
               "state" => "paid",
               "amount" => 1896,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-09 05:20:10",
               "state" => "pending",
               "amount" => 3648,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-04-29 20:58:22",
               "state" => "paid",
               "amount" => 3861,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-05 03:43:09",
               "state" => "pending",
               "amount" => 2280,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-16 11:11:22",
               "state" => "paid",
               "amount" => 1255,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-13 02:02:55",
               "state" => "paid",
               "amount" => 4212,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-01 06:22:04",
               "state" => "paid",
               "amount" => 3414,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-30 05:41:01",
               "state" => "pending",
               "amount" => 1749,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-10 15:26:38",
               "state" => "pending",
               "amount" => 3282,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-23 13:11:06",
               "state" => "paid",
               "amount" => 3888,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 03:41:05",
               "state" => "paid",
               "amount" => 1191,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-03 11:42:40",
               "state" => "paid",
               "amount" => 3944,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-13 00:33:19",
               "state" => "pending",
               "amount" => 3467,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-04-29 20:59:06",
               "state" => "paid",
               "amount" => 2097,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-24 12:54:21",
               "state" => "pending",
               "amount" => 4752,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-06 23:45:50",
               "state" => "paid",
               "amount" => 1792,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-04-30 02:29:41",
               "state" => "paid",
               "amount" => 4494,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-24 00:34:10",
               "state" => "pending",
               "amount" => 4194,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 02:40:29",
               "state" => "paid",
               "amount" => 2713,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-25 00:30:17",
               "state" => "pending",
               "amount" => 3800,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-11 12:42:41",
               "state" => "pending",
               "amount" => 3446,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-23 08:10:49",
               "state" => "pending",
               "amount" => 4928,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-08 06:50:39",
               "state" => "paid",
               "amount" => 2015,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-04-30 15:24:27",
               "state" => "paid",
               "amount" => 2792,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-24 10:51:43",
               "state" => "paid",
               "amount" => 3837,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-05 20:27:03",
               "state" => "pending",
               "amount" => 4957,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-15 15:14:54",
               "state" => "paid",
               "amount" => 2703,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-12 21:39:46",
               "state" => "paid",
               "amount" => 3263,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-14 12:03:55",
               "state" => "paid",
               "amount" => 4363,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-05 10:10:27",
               "state" => "pending",
               "amount" => 4396,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-08 10:43:19",
               "state" => "paid",
               "amount" => 1601,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-18 02:18:34",
               "state" => "pending",
               "amount" => 3329,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-24 03:15:34",
               "state" => "pending",
               "amount" => 2131,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-13 10:52:11",
               "state" => "paid",
               "amount" => 1084,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-25 09:24:48",
               "state" => "pending",
               "amount" => 1389,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-25 06:25:00",
               "state" => "paid",
               "amount" => 1263,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-25 01:26:53",
               "state" => "pending",
               "amount" => 3025,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-03 19:28:14",
               "state" => "pending",
               "amount" => 3160,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-28 19:51:31",
               "state" => "pending",
               "amount" => 4427,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-16 23:31:25",
               "state" => "pending",
               "amount" => 1393,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-25 19:17:43",
               "state" => "pending",
               "amount" => 4660,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-23 13:53:49",
               "state" => "paid",
               "amount" => 3157,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-14 01:07:29",
               "state" => "pending",
               "amount" => 1850,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-11 01:12:23",
               "state" => "pending",
               "amount" => 3736,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-26 15:14:04",
               "state" => "pending",
               "amount" => 3450,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-01 03:08:47",
               "state" => "paid",
               "amount" => 1422,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-14 07:55:24",
               "state" => "paid",
               "amount" => 1862,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-15 18:00:19",
               "state" => "paid",
               "amount" => 2160,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-26 15:37:55",
               "state" => "paid",
               "amount" => 2298,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-27 06:35:29",
               "state" => "pending",
               "amount" => 1441,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-23 08:47:47",
               "state" => "paid",
               "amount" => 1061,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-08 23:41:09",
               "state" => "pending",
               "amount" => 1890,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-20 21:19:20",
               "state" => "paid",
               "amount" => 2559,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-08 02:02:25",
               "state" => "paid",
               "amount" => 3112,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-04 16:13:33",
               "state" => "pending",
               "amount" => 2552,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-17 07:01:38",
               "state" => "pending",
               "amount" => 3571,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-12 16:46:12",
               "state" => "pending",
               "amount" => 1238,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-26 11:33:28",
               "state" => "pending",
               "amount" => 1559,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-29 07:06:58",
               "state" => "pending",
               "amount" => 2712,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-11 18:31:20",
               "state" => "paid",
               "amount" => 1101,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-23 05:10:59",
               "state" => "pending",
               "amount" => 2215,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-14 07:02:57",
               "state" => "pending",
               "amount" => 3483,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-05 06:01:17",
               "state" => "pending",
               "amount" => 2851,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-06 11:24:02",
               "state" => "pending",
               "amount" => 2631,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-14 22:44:14",
               "state" => "paid",
               "amount" => 3504,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-12 21:57:20",
               "state" => "pending",
               "amount" => 1798,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-26 07:23:02",
               "state" => "pending",
               "amount" => 4933,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-10 19:33:12",
               "state" => "paid",
               "amount" => 4863,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-05 10:04:18",
               "state" => "pending",
               "amount" => 3073,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-26 05:26:28",
               "state" => "pending",
               "amount" => 2628,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-19 03:59:53",
               "state" => "paid",
               "amount" => 2831,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-20 22:30:21",
               "state" => "paid",
               "amount" => 3559,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-22 01:34:26",
               "state" => "paid",
               "amount" => 2972,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-13 22:27:17",
               "state" => "pending",
               "amount" => 3532,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-14 02:29:53",
               "state" => "paid",
               "amount" => 1260,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-10 01:43:45",
               "state" => "paid",
               "amount" => 4422,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-29 05:31:52",
               "state" => "pending",
               "amount" => 2143,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-05 14:30:07",
               "state" => "paid",
               "amount" => 4730,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-07 08:26:37",
               "state" => "pending",
               "amount" => 4834,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-09 13:28:05",
               "state" => "pending",
               "amount" => 2297,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-14 09:17:24",
               "state" => "pending",
               "amount" => 3165,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-18 14:14:18",
               "state" => "paid",
               "amount" => 4767,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-12 01:22:55",
               "state" => "paid",
               "amount" => 1683,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-01 00:42:59",
               "state" => "pending",
               "amount" => 2046,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-17 04:03:01",
               "state" => "pending",
               "amount" => 2090,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-16 00:49:15",
               "state" => "paid",
               "amount" => 1182,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-23 09:05:10",
               "state" => "paid",
               "amount" => 4952,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-19 19:04:14",
               "state" => "paid",
               "amount" => 2849,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-12 16:47:36",
               "state" => "pending",
               "amount" => 3733,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-08 18:42:34",
               "state" => "pending",
               "amount" => 1513,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-16 21:05:36",
               "state" => "paid",
               "amount" => 3157,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-25 07:57:18",
               "state" => "paid",
               "amount" => 1226,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-06 06:20:23",
               "state" => "pending",
               "amount" => 1990,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-20 11:25:00",
               "state" => "paid",
               "amount" => 1974,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-26 10:46:03",
               "state" => "pending",
               "amount" => 4004,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-28 14:50:24",
               "state" => "paid",
               "amount" => 3607,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-31 23:26:49",
               "state" => "pending",
               "amount" => 2589,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-12 11:57:46",
               "state" => "paid",
               "amount" => 3623,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-17 11:54:34",
               "state" => "paid",
               "amount" => 3959,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-27 01:44:48",
               "state" => "paid",
               "amount" => 2065,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-28 20:46:44",
               "state" => "paid",
               "amount" => 4947,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-14 00:12:15",
               "state" => "paid",
               "amount" => 1849,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-19 02:07:12",
               "state" => "pending",
               "amount" => 4672,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-27 06:10:38",
               "state" => "pending",
               "amount" => 4062,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-25 07:35:34",
               "state" => "paid",
               "amount" => 1667,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-04-30 18:25:21",
               "state" => "paid",
               "amount" => 1466,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-08 05:32:26",
               "state" => "paid",
               "amount" => 2027,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-16 01:12:04",
               "state" => "pending",
               "amount" => 3275,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-23 14:14:41",
               "state" => "paid",
               "amount" => 3142,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-19 22:42:19",
               "state" => "paid",
               "amount" => 2525,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-18 11:19:34",
               "state" => "pending",
               "amount" => 3264,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-25 01:19:22",
               "state" => "paid",
               "amount" => 1696,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-05 17:23:46",
               "state" => "pending",
               "amount" => 4524,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-10 19:06:17",
               "state" => "paid",
               "amount" => 1902,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-15 15:00:52",
               "state" => "pending",
               "amount" => 1666,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-18 03:46:38",
               "state" => "paid",
               "amount" => 2343,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-19 04:00:13",
               "state" => "pending",
               "amount" => 3184,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-24 15:36:17",
               "state" => "pending",
               "amount" => 2189,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-14 01:54:42",
               "state" => "paid",
               "amount" => 2333,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-18 13:55:06",
               "state" => "paid",
               "amount" => 1393,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-29 11:37:48",
               "state" => "paid",
               "amount" => 1133,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-02 13:34:34",
               "state" => "paid",
               "amount" => 1953,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-07 05:52:30",
               "state" => "pending",
               "amount" => 4636,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-22 05:49:19",
               "state" => "paid",
               "amount" => 4696,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-25 13:32:16",
               "state" => "paid",
               "amount" => 4055,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-01 03:57:01",
               "state" => "pending",
               "amount" => 2428,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-12 18:39:39",
               "state" => "paid",
               "amount" => 2548,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-13 22:42:17",
               "state" => "paid",
               "amount" => 2972,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-28 15:54:27",
               "state" => "paid",
               "amount" => 2693,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-05 13:47:10",
               "state" => "pending",
               "amount" => 2859,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-14 09:29:14",
               "state" => "paid",
               "amount" => 3687,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-19 18:53:15",
               "state" => "pending",
               "amount" => 1717,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-28 09:40:46",
               "state" => "paid",
               "amount" => 2827,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-21 19:51:33",
               "state" => "pending",
               "amount" => 2083,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-24 19:04:22",
               "state" => "paid",
               "amount" => 4828,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-02 08:37:14",
               "state" => "pending",
               "amount" => 3435,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-11 22:31:25",
               "state" => "pending",
               "amount" => 2070,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-07 02:03:29",
               "state" => "paid",
               "amount" => 3668,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-29 04:40:14",
               "state" => "pending",
               "amount" => 1050,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-04-30 18:25:17",
               "state" => "paid",
               "amount" => 3573,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-21 05:22:19",
               "state" => "paid",
               "amount" => 4657,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-01 02:23:20",
               "state" => "pending",
               "amount" => 2076,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-16 23:01:29",
               "state" => "paid",
               "amount" => 3477,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-18 15:53:44",
               "state" => "pending",
               "amount" => 2901,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-18 17:04:56",
               "state" => "paid",
               "amount" => 3614,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-03 14:57:17",
               "state" => "paid",
               "amount" => 3008,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-25 19:06:53",
               "state" => "pending",
               "amount" => 4060,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-10 12:52:03",
               "state" => "pending",
               "amount" => 3838,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-25 13:19:09",
               "state" => "pending",
               "amount" => 2718,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-03 00:41:54",
               "state" => "pending",
               "amount" => 3939,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-06 10:10:13",
               "state" => "pending",
               "amount" => 1294,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-10 07:29:29",
               "state" => "paid",
               "amount" => 1672,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-13 06:30:28",
               "state" => "pending",
               "amount" => 3685,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-19 19:54:35",
               "state" => "pending",
               "amount" => 4624,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-01 16:01:49",
               "state" => "pending",
               "amount" => 1046,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-03 09:32:10",
               "state" => "pending",
               "amount" => 2913,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-03 06:27:34",
               "state" => "pending",
               "amount" => 2572,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-20 14:27:04",
               "state" => "pending",
               "amount" => 1753,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-03 12:34:43",
               "state" => "pending",
               "amount" => 1991,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-01 22:37:31",
               "state" => "pending",
               "amount" => 2248,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-03 20:00:36",
               "state" => "paid",
               "amount" => 4441,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-15 12:12:03",
               "state" => "pending",
               "amount" => 2923,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-12 20:19:56",
               "state" => "paid",
               "amount" => 4202,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-02 03:02:59",
               "state" => "paid",
               "amount" => 3889,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-12 19:29:40",
               "state" => "pending",
               "amount" => 4268,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-14 20:37:50",
               "state" => "paid",
               "amount" => 3568,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-11 02:57:46",
               "state" => "pending",
               "amount" => 3071,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-24 10:30:52",
               "state" => "pending",
               "amount" => 3399,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-22 17:16:10",
               "state" => "pending",
               "amount" => 1829,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-04 21:38:39",
               "state" => "paid",
               "amount" => 4147,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-25 18:50:53",
               "state" => "paid",
               "amount" => 1238,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-01 03:06:44",
               "state" => "pending",
               "amount" => 3871,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-15 19:03:14",
               "state" => "pending",
               "amount" => 2853,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-08 09:31:18",
               "state" => "pending",
               "amount" => 4974,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-17 18:41:39",
               "state" => "paid",
               "amount" => 4245,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-02 09:48:41",
               "state" => "paid",
               "amount" => 1596,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-02 00:21:42",
               "state" => "paid",
               "amount" => 3394,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-06 18:21:13",
               "state" => "pending",
               "amount" => 2984,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-12 11:18:38",
               "state" => "pending",
               "amount" => 3932,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-23 12:13:16",
               "state" => "pending",
               "amount" => 4405,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-13 14:56:55",
               "state" => "pending",
               "amount" => 2292,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-06 03:14:34",
               "state" => "paid",
               "amount" => 4748,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-22 16:15:04",
               "state" => "pending",
               "amount" => 2026,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-24 03:41:06",
               "state" => "pending",
               "amount" => 1409,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-24 01:06:14",
               "state" => "pending",
               "amount" => 3127,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-27 18:53:28",
               "state" => "paid",
               "amount" => 3845,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-13 20:37:28",
               "state" => "pending",
               "amount" => 3958,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-04 10:25:20",
               "state" => "pending",
               "amount" => 3465,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-13 09:29:21",
               "state" => "paid",
               "amount" => 1423,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-09 13:01:38",
               "state" => "paid",
               "amount" => 1877,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-17 03:26:51",
               "state" => "paid",
               "amount" => 3007,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-13 01:35:43",
               "state" => "pending",
               "amount" => 4342,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-03 07:17:41",
               "state" => "pending",
               "amount" => 4388,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-01 21:07:39",
               "state" => "pending",
               "amount" => 1979,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-23 01:49:48",
               "state" => "paid",
               "amount" => 2875,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-03 09:16:16",
               "state" => "pending",
               "amount" => 1821,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-18 03:41:16",
               "state" => "paid",
               "amount" => 1670,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-27 06:58:07",
               "state" => "pending",
               "amount" => 4162,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-14 06:37:47",
               "state" => "paid",
               "amount" => 2322,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-24 17:03:38",
               "state" => "paid",
               "amount" => 1892,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-08 17:21:04",
               "state" => "paid",
               "amount" => 2449,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-07 16:15:06",
               "state" => "pending",
               "amount" => 2241,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-25 13:59:18",
               "state" => "pending",
               "amount" => 3625,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-15 10:20:08",
               "state" => "paid",
               "amount" => 1101,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-01 18:01:55",
               "state" => "pending",
               "amount" => 3279,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-12 06:12:36",
               "state" => "paid",
               "amount" => 1177,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-03 03:47:25",
               "state" => "paid",
               "amount" => 3055,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-10 01:37:22",
               "state" => "pending",
               "amount" => 3869,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-18 10:33:23",
               "state" => "paid",
               "amount" => 3018,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-01 07:37:28",
               "state" => "paid",
               "amount" => 4909,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-26 15:17:20",
               "state" => "paid",
               "amount" => 4941,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-01 02:47:59",
               "state" => "paid",
               "amount" => 4437,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-01 07:34:39",
               "state" => "paid",
               "amount" => 2040,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-11 15:02:47",
               "state" => "paid",
               "amount" => 3069,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-23 09:19:36",
               "state" => "pending",
               "amount" => 3329,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-02 15:46:17",
               "state" => "paid",
               "amount" => 2404,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-09 13:22:50",
               "state" => "pending",
               "amount" => 3258,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-24 03:32:59",
               "state" => "pending",
               "amount" => 2544,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-15 09:27:57",
               "state" => "paid",
               "amount" => 2805,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-08 03:09:36",
               "state" => "pending",
               "amount" => 3946,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-11 18:59:56",
               "state" => "paid",
               "amount" => 3887,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-14 04:43:48",
               "state" => "pending",
               "amount" => 2849,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-01 12:24:42",
               "state" => "paid",
               "amount" => 3595,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-01 15:07:14",
               "state" => "paid",
               "amount" => 1027,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-27 18:40:00",
               "state" => "paid",
               "amount" => 3074,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-07 16:26:49",
               "state" => "paid",
               "amount" => 1651,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-25 18:33:25",
               "state" => "paid",
               "amount" => 4530,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-02 00:44:58",
               "state" => "paid",
               "amount" => 1950,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-05 17:22:33",
               "state" => "pending",
               "amount" => 4766,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-28 16:14:08",
               "state" => "paid",
               "amount" => 1712,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-27 09:03:19",
               "state" => "pending",
               "amount" => 2246,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-30 05:56:43",
               "state" => "pending",
               "amount" => 4920,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-01 13:58:23",
               "state" => "paid",
               "amount" => 2658,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-15 13:46:54",
               "state" => "paid",
               "amount" => 3747,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-13 19:30:21",
               "state" => "pending",
               "amount" => 1800,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-09 16:48:05",
               "state" => "paid",
               "amount" => 2247,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-11 06:51:06",
               "state" => "paid",
               "amount" => 1029,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-14 14:32:20",
               "state" => "paid",
               "amount" => 4174,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-13 22:24:30",
               "state" => "paid",
               "amount" => 1706,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-10 06:22:59",
               "state" => "paid",
               "amount" => 1336,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-12 09:31:09",
               "state" => "paid",
               "amount" => 2305,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-22 00:12:21",
               "state" => "pending",
               "amount" => 1850,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-13 13:13:11",
               "state" => "paid",
               "amount" => 1575,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-19 03:16:32",
               "state" => "paid",
               "amount" => 1513,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-25 23:22:11",
               "state" => "pending",
               "amount" => 3692,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-04-30 03:13:39",
               "state" => "paid",
               "amount" => 4581,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-23 19:35:37",
               "state" => "paid",
               "amount" => 4774,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 07:05:39",
               "state" => "pending",
               "amount" => 2419,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-23 16:02:16",
               "state" => "paid",
               "amount" => 3051,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-16 14:11:10",
               "state" => "paid",
               "amount" => 2369,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-13 07:32:49",
               "state" => "pending",
               "amount" => 3405,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-11 08:04:12",
               "state" => "paid",
               "amount" => 4791,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-16 06:50:15",
               "state" => "pending",
               "amount" => 2896,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-07 01:22:30",
               "state" => "pending",
               "amount" => 2752,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-04-30 10:26:27",
               "state" => "paid",
               "amount" => 2229,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-01 18:41:44",
               "state" => "pending",
               "amount" => 4400,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-06-10 10:10:31",
               "state" => "pending",
               "amount" => 2509,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-26 07:20:53",
               "state" => "pending",
               "amount" => 3999,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-06 01:06:55",
               "state" => "paid",
               "amount" => 2983,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-14 15:45:57",
               "state" => "pending",
               "amount" => 4212,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-03 01:39:17",
               "state" => "paid",
               "amount" => 2341,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-18 06:13:57",
               "state" => "pending",
               "amount" => 4854,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-17 23:51:44",
               "state" => "pending",
               "amount" => 4826,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-30 04:28:58",
               "state" => "pending",
               "amount" => 1114,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-27 09:37:29",
               "state" => "pending",
               "amount" => 2311,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-17 00:18:35",
               "state" => "pending",
               "amount" => 2249,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-23 07:14:05",
               "state" => "paid",
               "amount" => 1537,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-18 23:26:31",
               "state" => "paid",
               "amount" => 1216,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-20 13:11:11",
               "state" => "paid",
               "amount" => 2325,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-14 00:47:27",
               "state" => "pending",
               "amount" => 4248,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-04 06:42:01",
               "state" => "pending",
               "amount" => 4711,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-29 07:41:16",
               "state" => "pending",
               "amount" => 4298,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-01 16:15:13",
               "state" => "paid",
               "amount" => 3581,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-19 13:42:21",
               "state" => "paid",
               "amount" => 4117,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-25 01:25:18",
               "state" => "pending",
               "amount" => 1463,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-15 13:24:20",
               "state" => "pending",
               "amount" => 2912,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-26 00:15:06",
               "state" => "paid",
               "amount" => 1443,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-02 21:23:27",
               "state" => "pending",
               "amount" => 1136,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-22 21:43:45",
               "state" => "pending",
               "amount" => 4273,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-28 06:17:25",
               "state" => "pending",
               "amount" => 3864,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-05 09:41:14",
               "state" => "pending",
               "amount" => 2472,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-14 11:24:46",
               "state" => "pending",
               "amount" => 1100,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-12 07:11:18",
               "state" => "paid",
               "amount" => 3331,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-15 13:03:34",
               "state" => "paid",
               "amount" => 1467,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-26 15:38:35",
               "state" => "pending",
               "amount" => 1893,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-06-16 18:01:27",
               "state" => "pending",
               "amount" => 3759,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-20 10:02:42",
               "state" => "pending",
               "amount" => 1838,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-22 22:54:53",
               "state" => "paid",
               "amount" => 4960,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-06 04:20:50",
               "state" => "pending",
               "amount" => 3517,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-07 02:38:32",
               "state" => "paid",
               "amount" => 3238,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-06 16:57:38",
               "state" => "paid",
               "amount" => 3833,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-28 03:53:22",
               "state" => "paid",
               "amount" => 4566,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-11 06:58:06",
               "state" => "pending",
               "amount" => 4155,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-18 08:08:55",
               "state" => "paid",
               "amount" => 2214,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-09 02:17:35",
               "state" => "pending",
               "amount" => 2476,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-25 05:25:28",
               "state" => "paid",
               "amount" => 2844,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-15 09:50:07",
               "state" => "paid",
               "amount" => 2895,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-04 06:34:56",
               "state" => "paid",
               "amount" => 2028,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-26 23:21:22",
               "state" => "pending",
               "amount" => 4835,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-14 06:15:54",
               "state" => "pending",
               "amount" => 1058,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-18 17:22:38",
               "state" => "pending",
               "amount" => 2248,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-21 03:32:24",
               "state" => "pending",
               "amount" => 3307,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-19 21:40:22",
               "state" => "pending",
               "amount" => 1468,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-20 17:34:43",
               "state" => "pending",
               "amount" => 3952,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-05-31 18:27:00",
               "state" => "pending",
               "amount" => 2486,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-05-26 07:06:37",
               "state" => "paid",
               "amount" => 4889,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-23 08:23:48",
               "state" => "paid",
               "amount" => 2182,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-14 05:51:13",
               "state" => "paid",
               "amount" => 2552,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-02 00:16:57",
               "state" => "pending",
               "amount" => 4788,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-28 10:25:17",
               "state" => "pending",
               "amount" => 2927,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-20 19:34:48",
               "state" => "paid",
               "amount" => 1716,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-28 17:44:35",
               "state" => "paid",
               "amount" => 4891,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-01 02:38:29",
               "state" => "paid",
               "amount" => 4713,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-06-12 00:21:52",
               "state" => "pending",
               "amount" => 4804,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-07 21:11:03",
               "state" => "paid",
               "amount" => 3924,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-12 05:16:41",
               "state" => "pending",
               "amount" => 4420,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-14 19:14:54",
               "state" => "pending",
               "amount" => 2448,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-05-06 07:17:38",
               "state" => "paid",
               "amount" => 4968,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-04 11:28:22",
               "state" => "paid",
               "amount" => 1718,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-18 00:09:48",
               "state" => "pending",
               "amount" => 2620,
               "project_id" => 8
            ],
            [
               "schedule_date" => "2023-05-28 03:30:59",
               "state" => "paid",
               "amount" => 1383,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-05-10 21:00:36",
               "state" => "paid",
               "amount" => 3591,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-05-28 08:51:52",
               "state" => "paid",
               "amount" => 2499,
               "project_id" => 3
            ],
            [
               "schedule_date" => "2023-06-26 04:16:34",
               "state" => "pending",
               "amount" => 2247,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-13 02:20:22",
               "state" => "pending",
               "amount" => 4192,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-28 13:48:19",
               "state" => "pending",
               "amount" => 1933,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-26 02:07:14",
               "state" => "pending",
               "amount" => 4134,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-10 22:16:04",
               "state" => "paid",
               "amount" => 2016,
               "project_id" => 10
            ],
            [
               "schedule_date" => "2023-06-26 21:15:55",
               "state" => "pending",
               "amount" => 2526,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-30 07:31:15",
               "state" => "pending",
               "amount" => 1937,
               "project_id" => 2
            ],
            [
               "schedule_date" => "2023-06-04 16:03:13",
               "state" => "pending",
               "amount" => 1285,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-22 20:24:52",
               "state" => "paid",
               "amount" => 3444,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-11 00:53:44",
               "state" => "paid",
               "amount" => 4604,
               "project_id" => 5
            ],
            [
               "schedule_date" => "2023-05-04 02:20:09",
               "state" => "paid",
               "amount" => 3528,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-21 07:24:26",
               "state" => "pending",
               "amount" => 3633,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-06-10 09:53:08",
               "state" => "pending",
               "amount" => 1429,
               "project_id" => 7
            ],
            [
               "schedule_date" => "2023-06-21 11:23:37",
               "state" => "pending",
               "amount" => 3202,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-06-15 02:52:24",
               "state" => "pending",
               "amount" => 1631,
               "project_id" => 1
            ],
            [
               "schedule_date" => "2023-06-08 02:40:59",
               "state" => "pending",
               "amount" => 3768,
               "project_id" => 6
            ],
            [
               "schedule_date" => "2023-05-06 13:15:58",
               "state" => "paid",
               "amount" => 1559,
               "project_id" => 4
            ],
            [
               "schedule_date" => "2023-05-21 04:38:43",
               "state" => "paid",
               "amount" => 3646,
               "project_id" => 9
            ],
            [
               "schedule_date" => "2023-05-11 01:35:06",
               "state" => "paid",
               "amount" => 3007,
               "project_id" => 10
            ]
        ];

        foreach ($amortizations as $amortizationData) {
            Amortization::create($amortizationData);
        }
    }
}
