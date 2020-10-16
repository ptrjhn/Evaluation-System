<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `subjects` (`id`, `code`, `description`, `unit`, `lab`, `lec`, `created_at`, `updated_at`, `deleted_at`) VALUES
                (1, 'PHYSICS11', 'General Physics', '3', NULL, 3, '2020-10-01 13:15:40', '2020-10-08 09:44:20', NULL),
                (2, 'IT58', 'System Analysis and Design', '3', 3, 2, '2020-04-10 13:15:40', '2020-10-08 09:45:50', NULL),
                (3, 'PE14', 'Team Sports Games', '2', NULL, 2, '2020-   09-09 13:15:40', '2020-10-08 09:57:15', NULL),
                (4, 'PE12', 'Rhythmic Activities', '2', NULL, 2, '2020-07-15 13:15:40', '2020-10-08 06:15:33', NULL),
                (5, 'NSTP12', 'National Service Training Program', '3', NULL, NULL, '2020-08-06 13:15:40', '2020-10-08 06:16:57', NULL),
                (6, '37603281', 'Rerum in aut impedit quo qui in.', '7', 3, 2, '2020-05-28 13:15:40', '2020-10-07 13:15:41', NULL),
                (7, '00753036', 'Non doloribus sed culpa laborum consequatur in.', '7', 7, 1, '2020-05-21 13:15:40', '2020-10-07 13:15:41', NULL),
                (8, 'IT60', 'IT Ethics and Quality Standard', '3', NULL, 3, '2020-08-27 13:15:40', '2020-10-08 10:57:54', NULL),
                (9, 'FE1', 'Free Elective One', '3', 0, 3, '2020-08-18 13:15:40', '2020-10-08 10:33:22', NULL),
                (10, 'SOCSCI12', 'Society Culture including Family Planning Population Education Rural Society and Institutions Drug Addiction and Prevention and STD HIV Diseases', '3', NULL, 3, '2020-08-28 13:15:40', '2020-10-08 10:12:05', NULL),
                (11, 'IT59', 'Software Engineering', '3', 3, 2, '2020-07-01 13:15:40', '2020-10-08 10:41:58', NULL),
                (12, 'LIT11', 'Philippine Literature', '3', NULL, 3, '2020-08-25 13:15:40', '2020-10-08 09:42:24', NULL),
                (13, 'PHILO11', 'Fundamentals of Logic and Critical Thinking', '3', NULL, 3, '2020-08-08 13:15:40', '2020-10-08 10:26:46', NULL),
                (14, '34962718', 'Quidem at cumque non aliquam.', '2', 7, 1, '2020-04-14 13:15:40', '2020-10-07 13:15:42', NULL),
                (15, '02077000', 'Atque odio harum odio et.', '3', 2, 5, '2020-08-19 13:15:40', '2020-10-07 13:15:42', NULL),
                (16, 'IT201', 'Capstone Project One', '3', 3, 2, '2020-05-04 13:15:40', '2020-10-08 10:52:27', NULL),
                (17, '18008982', 'Ullam odio nobis vero exercitationem quis enim.', '4', 9, 0, '2020-06-21 13:15:40', '2020-10-07 13:15:43', NULL),
                (18, 'FE2', 'Digital Animation', '3', 3, 2, '2020-07-24 13:15:40', '2020-10-08 10:36:58', NULL),
                (19, 'IT33', 'Discrete Structures', '3', 3, 2, '2020-07-23 13:15:40', '2020-10-08 06:56:48', NULL),
                (20, '34355169', 'Dolorem fugiat possimus pariatur fuga.', '7', 1, 3, '2020-06-15 13:15:40', '2020-10-07 13:15:43', NULL),
                (21, 'MATH18', 'Analytical Geometry', '3', NULL, 3, '2020-04-12 13:15:40', '2020-10-08 05:51:22', NULL),
                (22, 'IT37', 'Operating System Applications', '3', 3, 2, '2020-07-09 13:15:40', '2020-10-08 05:29:03', NULL),
                (23, 'IT38', 'Hardware and Trouble Shooting and Software Installation', '3', 3, 2, '2020-08-21 13:15:40', '2020-10-08 06:09:41', NULL),
                (24, 'PE11', 'Physical Fitness', '2', NULL, 2, '2020-04-26 13:15:40', '2020-10-08 05:30:17', NULL),
                (25, '28484141', 'Libero non ratione non nihil ea magni.', '1', 8, 4, '2020-05-08 13:15:40', '2020-10-07 13:15:44', NULL),
                (26, '37510145', 'Sequi corporis adipisci architecto dicta.', '0', 0, 3, '2020-07-08 13:15:40', '2020-10-07 13:15:44', NULL),
                (27, 'IT39', 'Network Technology', '3', 3, 2, '2020-09-07 13:15:40', '2020-10-08 05:13:40', NULL),
                (28, '14801921', 'Et dolores aut quia ad.', '4', 3, 2, '2020-05-01 13:15:40', '2020-10-07 13:15:44', NULL),
                (29, '39933980', 'Iure et nesciunt alias nihil voluptatibus.', '0', 0, 1, '2020-09-04 13:15:40', '2020-10-07 13:15:44', NULL),
                (30, 'IT35', 'Electronics with Technical Drawing', '3', 3, 2, '2020-09-16 13:15:40', '2020-10-08 00:07:26', NULL),
                (31, '07991134', 'Aut et dicta voluptas velit.', '5', 0, 0, '2020-07-22 13:15:40', '2020-10-07 13:15:44', NULL),
                (32, '22738448', 'Molestiae commodi et autem mollitia.', '4', 3, 5, '2020-08-27 13:15:40', '2020-10-07 13:15:44', NULL),
                (33, '18887334', 'Est quisquam sit perferendis odit iste molestiae.', '4', 5, 0, '2020-05-18 13:15:40', '2020-10-07 13:15:44', NULL),
                (34, 'IT71', 'Financial Accounting', '3', NULL, 3, '2020-09-27 13:15:40', '2020-10-08 06:56:14', NULL),
                (35, 'IT57', 'Technoprenuership', '3', 3, 2, '2020-06-15 13:15:40', '2020-10-08 10:56:24', NULL),
                (36, '03297797', 'Deserunt exercitationem eius itaque beatae.', '9', 3, 5, '2020-09-03 13:15:40', '2020-10-07 13:15:45', NULL),
                (37, 'BIO11', 'General Biology', '3', 3, 2, '2020-07-18 13:15:40', '2020-10-08 10:40:37', NULL),
                (38, '11722595', 'Aut soluta dolor quo consequatur.', '9', 4, 0, '2020-08-20 13:15:40', '2020-10-07 13:15:45', NULL),
                (39, '11147589', 'Sunt sit et reprehenderit magnam quo tenetur sed.', '7', 9, 3, '2020-09-15 13:15:40', '2020-10-07 13:15:45', NULL),
                (40, '20715489', 'Et alias eum molestias assumenda.', '0', 4, 7, '2020-09-11 13:15:40', '2020-10-07 13:15:45', NULL),
                (41, 'IT32', 'Programming Two Advance', '3', 3, 2, '2020-05-05 13:15:40', '2020-10-08 06:51:44', NULL),
                (42, 'IT52', 'Object Oriented Programming', '3', 3, 2, '2020-08-28 13:15:40', '2020-10-08 06:52:38', NULL),
                (43, 'SOCSCI16', 'Life and Works of Rizal', '3', NULL, 3, '2020-06-19 13:15:40', '2020-10-08 10:53:15', NULL),
                (44, 'IT54', 'Database Management Two', '3', 3, 2, '2020-09-16 13:15:40', '2020-10-08 09:44:58', NULL),
                (45, 'IT31', 'Programming One basic', '3', 3, 2, '2020-07-09 13:15:40', '2020-10-08 05:55:32', NULL),
                (46, '00032070', 'Dolores totam rerum sed perferendis.', '1', 4, 4, '2020-04-30 13:15:40', '2020-10-07 13:15:46', NULL),
                (47, 'FIL16', 'Pagbasa at Pagsulat Tingo sa Pananaliksik', '3', NULL, 3, '2020-09-15 13:15:40', '2020-10-08 06:50:04', NULL),
                (48, '06576998', 'Sed alias voluptatem accusantium dolorem.', '9', 6, 5, '2020-05-07 13:15:40', '2020-10-07 13:15:46', NULL),
                (49, 'IT53', 'Database Management One', '3', 3, 2, '2020-08-06 13:15:40', '2020-10-08 06:55:30', NULL),
                (50, 'IT202', 'Capstone Project Two', '3', 3, 2, '2020-07-30 13:15:40', '2020-10-08 10:57:06', NULL),
                (51, '02750071', 'Dolorem ut omnis sed dolor accusamus iusto.', '3', 7, 8, '2020-08-30 13:15:40', '2020-10-07 13:15:47', NULL),
                (52, 'FE3', 'Photography', '3', 3, 2, '2020-04-16 13:15:40', '2020-10-08 10:45:01', NULL),
                (53, '06537111', 'Nesciunt nihil perferendis qui et.', '0', 8, 5, '2020-05-01 13:15:40', '2020-10-07 13:15:47', NULL),
                (54, '12502417', 'Accusamus in in commodi quas sed voluptatem.', '6', 2, 4, '2020-08-02 13:15:40', '2020-10-07 13:15:47', NULL),
                (55, '11295266', 'Excepturi occaecati quo suscipit itaque unde.', '0', 1, 4, '2020-07-27 13:15:40', '2020-10-07 13:15:47', NULL),
                (56, 'SOCSCI11', 'General Psychology including Drug Addiction and Prevention STD HIV Diseases Family Planning and Population Education', '3', NULL, 3, '2020-06-02 13:15:40', '2020-10-08 10:04:06', NULL),
                (57, 'ENG16A', 'Technical Writing and Reporting in the Discipline', '3', NULL, 3, '2020-09-27 13:15:40', '2020-10-08 05:33:11', NULL),
                (58, '23903142', 'Inventore eveniet hic quod.', '8', 9, 4, '2020-07-28 13:15:40', '2020-10-07 13:15:48', NULL),
                (59, 'IT34', 'Basic Electricity', '3', 3, 2, '2020-07-09 13:15:40', '2020-10-08 00:06:28', NULL),
                (60, '08323767', 'Ratione neque quod laborum quia tempore.', '5', 0, 3, '2020-10-03 13:15:40', '2020-10-07 13:15:48', NULL),
                (61, 'EE112', 'Chemistry For Engineers', '4', 3, 3, '2020-09-18 13:15:40', '2020-10-08 11:04:39', NULL),
                (62, 'NSTP11', 'National Service Training Program', '2', NULL, NULL, '2020-08-16 13:15:40', '2020-10-08 05:31:14', NULL),
                (63, 'IT36', 'Computer Organization', '3', 3, 2, '2020-05-02 13:15:40', '2020-10-08 06:11:51', NULL),
                (64, 'FIL15', 'Komunikasyon sa Akademikong Filipino', '3', NULL, 3, '2020-08-24 13:15:40', '2020-10-08 05:35:02', NULL),
                (65, 'IT87', 'IT Elective Two Game Development', '3', 3, 2, '2020-06-28 13:15:40', '2020-10-08 10:51:49', NULL),
                (66, '34840559', 'Totam adipisci ut eveniet culpa.', '3', 6, 1, '2020-04-28 13:15:40', '2020-10-07 13:15:48', NULL),
                (67, '23195752', 'Aut alias id minus vero error.', '3', 3, 0, '2020-06-05 13:15:40', '2020-10-07 13:15:48', NULL),
                (68, 'SOCSCI15', 'General Economics LRT Cooperative Entrepreneurship Work Ethics including Current Issues', '3', NULL, 3, '2020-05-14 13:15:40', '2020-10-08 10:39:03', NULL),
                (69, '34556009', 'Nihil omnis ipsam veniam explicabo placeat.', '5', 4, 0, '2020-07-27 13:15:40', '2020-10-07 13:15:48', NULL),
                (70, 'PE13', 'Individual Dual Sports Games', '2', NULL, 2, '2020-04-23 13:15:40', '2020-10-08 07:06:42', NULL),
                (71, 'IT30', 'IT Fundamentals', '3', 3, 2, '2020-07-04 13:15:40', '2020-10-08 00:04:10', NULL),
                (72, 'IT200B', 'Internship OJT Practicum', '9', NULL, 9, '2020-08-16 13:15:40', '2020-10-08 10:58:47', NULL),
                (73, '25926798', 'Et aliquid omnis ut inventore.', '5', 1, 9, '2020-05-29 13:15:40', '2020-10-07 13:15:49', NULL),
                (74, 'ENG14', 'Speech and Oral Commnucation', '3', NULL, 3, '2020-07-03 13:15:40', '2020-10-08 06:35:11', NULL),
                (75, '10932957', 'Consequatur ut labore error expedita.', '1', 3, 0, '2020-06-12 13:15:40', '2020-10-07 13:15:50', NULL),
                (76, '20764616', 'Animi consequatur officiis quos.', '3', 1, 7, '2020-05-08 13:15:40', '2020-10-07 13:15:50', NULL),
                (77, '05042777', 'Ex quaerat voluptatem magni et libero est.', '4', 8, 7, '2020-08-17 13:15:40', '2020-10-07 13:15:50', NULL),
                (78, '25002546', 'Fugiat ea omnis id laborum quibusdam harum.', '7', 5, 2, '2020-07-26 13:15:40', '2020-10-07 13:15:50', NULL),
                (79, '19602028', 'Aut qui et a minima.', '5', 7, 1, '2020-07-25 13:15:40', '2020-10-07 13:15:50', NULL),
                (80, '41597842', 'Assumenda ratione praesentium velit.', '0', 8, 5, '2020-06-06 13:15:40', '2020-10-07 13:15:50', NULL),
                (81, '04180319', 'Officiis et dolores dolorum excepturi.', '0', 1, 7, '2020-08-03 13:15:40', '2020-10-07 13:15:50', NULL),
                (82, '34938386', 'Voluptatem hic et non occaecati. Et ex nihil ut.', '9', 6, 4, '2020-07-15 13:15:40', '2020-10-07 13:15:50', NULL),
                (83, 'IT86', 'IT Elective One Human Computer Interaction', '3', 3, 2, '2020-06-27 13:15:40', '2020-10-08 10:30:47', NULL),
                (84, 'HUM11', 'Introduction to Humanities', '3', NULL, 3, '2020-07-09 13:15:40', '2020-10-08 10:39:49', NULL),
                (85, '09442139', 'Ducimus id quas explicabo qui velit illo ex.', '0', 7, 2, '2020-04-22 13:15:40', '2020-10-07 13:15:51', NULL),
                (86, 'SOCSCI14', 'Political Science with Philippines politics Goverenance History and Constituition Election', '3', NULL, 3, '2020-08-09 13:15:40', '2020-10-08 10:55:11', NULL),
                (87, '06697761', 'In minus nihil repudiandae distinctio est.', '8', 9, 0, '2020-09-04 13:15:40', '2020-10-07 13:15:51', NULL),
                (88, '31698740', 'Inventore nihil ut illum ratione.', '8', 9, 2, '2020-08-06 13:15:40', '2020-10-07 13:15:51', NULL),
                (89, 'EE111', 'Calculus I', '4', NULL, 4, '2020-09-16 13:15:40', '2020-10-08 11:02:42', NULL),
                (90, 'IT55', 'Multimedia System', '3', 3, 2, '2020-06-13 13:15:40', '2020-10-08 10:13:14', NULL),
                (91, '40977812', 'Sed provident aspernatur reiciendis hic at.', '1', 4, 6, '2020-05-31 13:15:40', '2020-10-07 13:15:52', NULL),
                (92, '03884416', 'Sapiente dicta dolores id est.', '8', 1, 1, '2020-07-16 13:15:40', '2020-10-07 13:15:52', NULL),
                (93, '29872596', 'Nostrum cumque quasi vel ut.', '7', 8, 6, '2020-05-06 13:15:40', '2020-10-07 13:15:52', NULL),
                (94, '19064451', 'Autem nemo est ut et nulla optio aperiam.', '5', 7, 5, '2020-07-15 13:15:40', '2020-10-07 13:15:52', NULL),
                (95, 'IT56', 'Web Programming', '3', 3, 2, '2020-04-23 13:15:40', '2020-10-08 09:49:52', NULL),
                (96, 'IT50', 'Network Administration', '3', 3, 2, '2020-08-31 13:15:40', '2020-10-08 06:13:42', NULL),
                (97, '29187607', 'Veritatis eaque commodi assumenda qui.', '8', 9, 0, '2020-06-11 13:15:40', '2020-10-07 13:15:52', NULL),
                (98, 'IT72', 'Financial Management', '3', NULL, 3, '2020-04-27 13:15:40', '2020-10-08 09:56:31', NULL),
                (99, 'STAT15', 'Probability and Statistics', '3', 3, 2, '2020-09-08 13:15:40', '2020-10-08 09:43:31', NULL),
                (100, '30397217', 'Commodi libero fuga pariatur dolores.', '3', 6, 7, '2020-09-05 13:15:40', '2020-10-07 13:15:53', NULL),
                (101, 'MATH11', 'College Algebra', '3', NULL, 3, '2020-10-07 14:21:20', '2020-10-08 00:03:11', NULL),
                (102, 'ENG11', 'Communication Arts and Skills', '3', NULL, 3, '2020-10-07 14:22:26', '2020-10-08 00:02:30', NULL)
                ");
        // factory(App\Subject::class, 100)->create();
    }
}
