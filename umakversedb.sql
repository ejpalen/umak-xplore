-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umakversedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`id`, `name`, `description`, `image_url`) VALUES
('building-ab1', 'Academic Building I', 'The Academic Building I is where students go to attend classes, conduct research, and study. Its a vital hub for learning and academic activities on campus.', 'media/UmakDiscovery/discoveries-academicbldg1.png'),
('building-ab2', 'Academic Building II', 'The Academic Building II is where students go to attend classes, conduct research, and study. Its a vital hub for learning and academic activities on campus.', 'media/UmakDiscovery/discoveries-academicbldg2.png'),
('building-ab3', 'Academic Building III', 'The Academic Building III is where students go to attend classes, conduct research, and study. Its a vital hub for learning and academic activities on campus.', 'media/UmakDiscovery/discoveries-academicbldg3.png'),
('building-admin', 'Admin Building', 'The administrator building is a hub for important services and offices at the university, offering easy access for students and staff. With a functional design, it serves as a central location for various facilities.', 'media/UmakDiscovery/discoveries-admin.png'),
('building-hpsb', 'Health and Physical Science Building', 'The HPSB houses various colleges and departments, providing students with access to a diverse range of academic resources and opportunities. This is where students come to study, attend classes, and engage in research and collaboration with their peers.', 'media/UmakDiscovery/discoveries-hpsb.png'),
('building-stadium', 'Umak Stadium', 'The UMak Stadium is a multi-purpose sports facility within the University of Makati. It serves as a venue for various athletic events and activities, including football, basketball, and track and field competitions.', 'media/UmakDiscovery/discoveries-stadium.png\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `name`, `time`, `location`, `description`, `link`) VALUES
(1, '2023-05-02', 'Hackathon', '9:00 AM', 'HPSB', 'A hackathon is an intensive event in which students come together to collaborate on a project or solve a problem within a set timeframe. The event typically starts in the morning and lasts for 24-48 hours, with participants working through the night to complete their projects.', 'https://www.exampleuniversity.edu/hackathon'),
(2, '2023-05-04', 'Battle of the Bands', '7:00 PM', 'Umak Stadium', 'This annual event features student bands competing against each other in a music competition. The event is usually held in the evening and can last several hours, with the winner receiving a prize or recognition.', 'https://www.exampleuniversity.edu/battle-of-the-bands'),
(3, '2023-05-08', 'Cultural festival', '11:00 AM', 'Umak Stadium', 'Many universities hold cultural festivals throughout the year to celebrate diversity and showcase the traditions and customs of different cultures. These events often start in the morning and can last all day, with activities ranging from food and music to dance and art.', 'https://www.exampleuniversity.edu/cultural-festival'),
(4, '2023-05-11', 'Sports tournaments ', '8:00 AM', 'Umak Stadium', 'Universities often host sports tournaments in a variety of sports, such as basketball, soccer, and volleyball. The start time for these tournaments can vary depending on the number of teams and the format of the tournament.', ' https://www.exampleuniversity.edu/sports-tournaments'),
(5, '2023-05-12', 'Academic conferences ', '9:00 AM', 'Academic Building III', 'Academic conferences are events in which researchers and academics come together to present their work and discuss their research findings. These conferences typically start in the morning and can last all day or for several days, with multiple sessions and presentations scheduled throughout the event.', 'https://www.exampleuniversity.edu/academic-conferences');

-- --------------------------------------------------------

--
-- Table structure for table `explore_organization`
--

CREATE TABLE `explore_organization` (
  `id` int(11) NOT NULL,
  `cover_pic` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descripition` varchar(500) DEFAULT NULL,
  `followers` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore_organization`
--

INSERT INTO `explore_organization` (`id`, `cover_pic`, `profile_pic`, `name`, `descripition`, `followers`) VALUES
(1, 'hackathoncover.png', 'hackathonprofile.png', 'UMak CCIS Hackathon', 'The Official Facebook Page of the College of Computer Science -Hackathon(University of Makati).', '205'),
(2, 'councilcover.png', 'councilprofile.png', 'CCIS Student Council', 'The Official Facebook Page of the College of Computer Science Student Council (University of Makati)', '5.3k'),
(3, 'codefestcover.png', 'codefestprofile.png', 'UMak Code Fest', 'The Official Facebook Page of the College of Computer Society\'s annual CodeFest.', '524');

-- --------------------------------------------------------

--
-- Table structure for table `explore_trending`
--

CREATE TABLE `explore_trending` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number_post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `explore_trending`
--

INSERT INTO `explore_trending` (`id`, `category`, `name`, `number_post`) VALUES
(1, 'Post', '#laronglahi', '1K Posts'),
(2, 'Post', '#UmakDanceextreme', '143 Posts'),
(3, 'Post', '#UmakXplore', '525 Posts'),
(4, 'Post', '#codeFest', '12K Posts'),
(5, 'Post', '#Oval', '114 Posts'),
(6, 'Post', '#midGraduation', '236 Posts'),
(7, 'Post', '#backtoschool', '1K Posts'),
(8, 'Post', '#schoolsupplies', '143 Posts'),
(9, 'Post', '#studymotivation', '525 Posts'),
(10, 'Post', '#backtoschool', '12K Posts'),
(11, 'Post', '#studentlife', '114 Posts'),
(12, 'Locations', 'Track Oval Field', '500 Posts'),
(13, 'Locations', 'Grand Theater', '800 Posts'),
(14, 'Locations', 'Basketball Court', '1200 Posts'),
(15, 'Locations', 'Main Gate', '400 Posts'),
(16, 'Locations', 'Building Three Bridgeway', '300 Posts'),
(17, 'Locations', 'Cafeteria', '1500 Posts'),
(18, 'Locations', 'Animation Lab', '100 Posts'),
(19, 'Locations', 'Fitness Gym', '600 Posts'),
(20, 'Locations', 'Volleyball Court', '900 Posts'),
(21, 'Locations', 'Student Lounge', '700 Posts'),
(22, 'Locations', 'Laboratories', '200 Posts'),
(23, 'Locations', 'Computer Lab', '400 Posts');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` varchar(100) NOT NULL,
  `floor_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `floor_id`, `name`, `description`, `image_url`) VALUES
('ab-3f-1', 'building-admin-floor-5-options', 'College of Governance and Public Policy (CGPP)', 'The College of Governance and Public Policy (CGPP) is an academic college within a university that offers programs and courses related to public administration, policy analysis, and governance. Its mission is to produce competent professionals and leaders who can contribute to the development of effective and ethical governance systems in society.', 'media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-2', 'building-admin-floor-5-options', 'College of Construction Services and Engineering (CCSE)', 'The College of Construction Services and Engineering is a higher education institution that provides education and training in various fields related to engineering, architecture, construction management, and other construction-related disciplines. Its programs are designed to equip students with the knowledge and skills necessary to succeed in the construction industry.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-3', 'building-admin-floor-5-options', 'College of Computing and Information Science (CCIS)', 'The College of Computing and Information Science (CCIS) is an academic institution that offers programs and courses related to computer science, information technology, data science, and related fields. Its mission is to provide students with the skills and knowledge necessary to thrive in the rapidly evolving field of computing and information science.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-4', 'building-admin-floor-5-options', 'College of Tourism and Hospitality Management (CTHM)', 'The College of Tourism and Hospitality Management (CTHM) is a higher education institution that offers programs and courses related to tourism, hospitality, culinary arts, and events management. Its mission is to produce competent and skilled professionals who can contribute to the growth and development of the tourism and hospitality industry.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-5', 'building-admin-floor-5-options', 'Institute of Accountancy (IOA)', 'The Institute of Accountancy (IOA) is an academic institution that offers programs and courses related to accounting, auditing, finance, and related fields. Its mission is to provide students with the knowledge and skills necessary to become competent and ethical professionals in the accounting and finance industries.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-6', 'building-admin-floor-5-options', 'College of Business and Financial Science (CBFS)', 'The College of Business and Financial Science (CBFS) is a higher education institution that offers programs and courses related to business, finance, economics, and related fields. Its mission is to produce skilled and knowledgeable professionals who can contribute to the growth and development of the business and finance sectors.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-7', 'building-admin-floor-5-options', 'Center for National Service Training (CNST)', 'The Center for National Service Training (CNST) is an institution that provides training and development programs for young people who are interested in serving their country through civic engagement, volunteerism, and other forms of community service. Its mission is to promote national unity, social responsibility, and active citizenship among the youth of the country.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-3f-8', 'building-admin-floor-5-options', 'College of Human Kinetics (CHK)', 'The College of Human Kinetics (CHK) is an academic institution that offers programs and courses related to human movement, exercise science, sports coaching, physical education, and related fields. Its mission is to produce competent and skilled professionals who can contribute to the promotion of physical activity, health, and wellness in society.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-4f-1', 'building-admin-floor-6-options', 'College of Arts and Letters (CAL)', 'The College of Arts and Letters (CAL) is an academic institution that offers programs and courses related to the humanities, social sciences, communication, and the arts. Its mission is to produce graduates who are equipped with critical thinking skills, cultural awareness, and creative expression, and who can contribute to the advancement of society through their chosen field.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-4f-2', 'building-admin-floor-6-options', 'College of Technology Management (CTM)', 'The College of Technology Management (CTM) is a higher education institution that offers programs and courses related to technology management, innovation, entrepreneurship, and related fields. Its mission is to produce graduates who are skilled in the application of technology in various industries, who can manage technological innovations and advancements, and who can contribute to the growth and development of the economy.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-4f-3', 'building-admin-floor-6-options', 'College of Education (COE)', 'The College of Education (COE) is an academic institution that offers programs and courses related to teacher education, educational psychology, curriculum and instruction, and related fields. Its mission is to produce competent and skilled professionals who can contribute to the improvement of the educational system and the quality of education in the country.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-4f-4', 'building-admin-floor-6-options', 'College of Science (COS)', 'The College of Science (COS) is an academic institution that offers programs and courses related to natural sciences, mathematics, computer science, and related fields. Its mission is to produce graduates who are competent and skilled in scientific inquiry, critical thinking, and problem-solving, and who can contribute to the advancement of science and technology in the country.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-5f-1', 'building-admin-floor-7-options', 'University Student Multimedia Organization (USMO)', 'The University Student Multimedia Organization (USMO) is a student-led group that focuses on multimedia production, such as video, audio, and graphic design, for various purposes including academic, organizational, and entertainment. Its mission is to enhance students\' skills in multimedia production, provide opportunities to showcase their talents, and contribute to the university community\'s various multimedia needs.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-5f-2', 'building-admin-floor-7-options', 'University Student Council (USC)', 'The University Student Council (USC) is the highest student governing body in a university. Its members are elected by the students and represent their interests and concerns to the university administration. The USC aims to promote student welfare, academic excellence, and social responsibility, as well as to provide opportunities for student involvement and leadership development.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-5f-3', 'building-admin-floor-7-options', 'Center for Students Formation & Discipline (CSFD)', 'The Center for Students Formation & Discipline (CSFD) is a department within a university that is responsible for promoting and enforcing students\' discipline, conduct, and character formation. It aims to provide guidance and support to students in their personal and social development, promote a culture of integrity, respect, and responsibility, and uphold the university\'s values and standards. ', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-5f-4', 'building-admin-floor-7-options', 'Center for Student organization and Activities (CSOA)', 'The Center for Student Organization and Activities (CSOA) is a department within a university that oversees and supports various student organizations and activities. Its mission is to promote student involvement, leadership development, and community engagement by providing resources, guidance, and support to student organizations and their members. The CSOA also serves as a hub for student-led events and initiatives, fostering a vibrant and diverse campus life.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-5f-5', 'building-admin-floor-7-options', 'Vice President for Student Services and Community Development (OVP-SSCD)', 'The Office of the Vice President for Student Services and Community Development (OVP-SSCD) is a unit within a university that oversees the development and delivery of various student services and programs. Its role is to promote student well-being, success, and engagement by providing a range of support services, such as academic advising, counseling, health services, housing, and financial aid. ', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6f-1', 'building-admin-floor-8-options', 'Grand Theatre', 'A Grand Theatre in the university is a performing arts venue that is typically used for a variety of events, including theatrical productions, concerts, dance performances, and lectures. It is often a centerpiece of the university\'s cultural and artistic life, serving as a platform for artistic expression and a space for community engagement. ', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6f-2', 'building-admin-floor-8-options', 'Broadcasting Studio', 'A broadcasting studio in a university is a facility that is designed to produce and broadcast high-quality audio and visual content, such as lectures, presentations, and campus events. It is equipped with specialized equipment and serves as a valuable training ground for students pursuing careers in media and broadcasting.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6f-3', 'building-admin-floor-8-options', 'Animation Lab', 'An animation lab in a university provides students with the necessary equipment and software to create animated content, including films, special effects, and educational materials. It is a valuable resource for students pursuing degrees in animation, digital media, and related fields.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6f-4', 'building-admin-floor-8-options', 'Editing Bay', 'An editing bay in a university is a facility equipped with specialized software and hardware for video and audio editing. It provides students with the resources they need to produce professional-quality media projects, including films, documentaries, podcasts, and music videos.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6f-5', 'building-admin-floor-8-options', 'Recording Studio', 'A Recording Studio in a university is a specialized facility designed for high-quality audio recording, mixing, and mastering. It provides students with access to professional-grade equipment and software for creating music, podcasts, and other audio content.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6fml-1', 'building-admin-floor-9-options', 'Center for Athletic Development (CAD)', 'The Center for Athletic Development (CAD) in a university is a specialized facility that supports the athletic training and conditioning needs of student-athletes. It provides state-of-the-art equipment and expert guidance to help athletes enhance their performance and prevent injuries.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-6fml-2', 'building-admin-floor-9-options', 'Center for Culture and the Arts (CCA)', 'The Center for Culture and the Arts (CCA) in a university is a hub for promoting and showcasing the diverse cultural and artistic expressions of the university community. It provides a venue for various cultural events, exhibitions, performances, and workshops that enrich the cultural and artistic experiences of the students, faculty, staff, and the wider public.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-1', 'building-admin-floor-1-options', 'University Chaplain', 'The University Chaplain is a religious leader and counselor who provides spiritual guidance and support to students, faculty, and staff of the university. They may also facilitate religious services and events on campus, and promote interfaith dialogue and understanding.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-2', 'building-admin-floor-1-options', 'Cafeteria', 'The Cafeteria is a dining facility that provides students, faculty, and staff with a variety of food options for breakfast, lunch, and dinner. It serves as a social hub where members of the university community can gather and enjoy meals together.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-3', 'building-admin-floor-1-options', 'Employees’ Lounge 1', 'The Employees\' Lounge 1 is a designated area in the university where faculty and staff can take a break, socialize, and relax during their work hours. It is a comfortable space equipped with amenities such as couches, chairs, tables, and a kitchenette.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-4', 'building-admin-floor-1-options', 'Employees’ Lounge 2', 'The Employees\' Lounge 2 is a designated area in the university where faculty and staff can take a break, socialize, and relax during their work hours. It is a comfortable space equipped with amenities such as couches, chairs, tables, and a kitchenette.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-5', 'building-admin-floor-1-options', 'Supply and Property Management Office (SPMO)', 'The Supply and Property Management Office (SPMO) in the university is responsible for managing and maintaining the inventory of equipment, supplies, and materials needed for the university\'s operations. It also ensures the proper allocation and utilization of resources to support the university\'s programs and services.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab-bl-6', 'building-admin-floor-1-options', 'General Services Office (GSO)', 'The General Services Office (GSO) is responsible for managing the general services of the university such as maintenance, transportation, security, and janitorial services to ensure a safe and conducive environment for learning and work.', '/media/UmakDiscovery/discoveries-admin.png'),
('ab3-1f-1', 'building-ab3-floor-1-options', 'Kitchen Lab', 'A kitchen lab in a university is a facility where culinary students can practice and hone their cooking skills. It is equipped with cooking stations, kitchen tools and appliances, and ingredients for students to experiment and develop recipes.', '/media/UmakDiscovery/discoveries-academicbldg1.png'),
('ab3-1f-2', 'building-ab3-floor-1-options', 'CASE Room', 'CASE Room generally stands for \"Computer-Aided Software Engineering Room\". It is a facility within a university that is designed to support teaching and research in software engineering and related fields. It is equipped with specialized software tools and resources that enable students and researchers to develop and test software applications.', '/media/UmakDiscovery/discoveries-academicbldg1.png'),
('ab3-1f-3', 'building-ab3-floor-1-options', 'Language Center', 'The Language Center in the university is a facility that offers language courses and resources to students and faculty members. It provides various programs to improve language proficiency and develop intercultural competence.', '/media/UmakDiscovery/discoveries-academicbldg1.png'),
('ab3-1f-4', 'building-ab3-floor-1-options', 'Computer Labs 6, 7', 'The Computer Labs 6 and 7 in the university are state-of-the-art facilities equipped with modern computers, software and high-speed internet access for students to carry out their academic and research activities.', '/media/UmakDiscovery/discoveries-academicbldg1.png'),
('hpsb-10f-1', 'building-hpsb-floor-9-options', '1001 – University of Makati Employees Multipurpose Cooperative (UMEMPC)', 'The University of Makati Employees Multipurpose Cooperative (UMEMPC) is an organization established by the university\'s employees to provide financial services and assistance to its members. It aims to promote the cooperative philosophy and encourage thrift among its members while providing them with opportunities for economic and social development.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-10f-2', 'building-hpsb-floor-9-options', '1001-1005, 1007-1011, 1013-1017 – Lecture Rooms', 'Lecture rooms are academic spaces within the university that are designed to accommodate students for instructional purposes. These rooms are equipped with chairs, tables, a whiteboard or chalkboard, and sometimes multimedia equipment such as projectors or smart boards.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-10f-3', 'building-hpsb-floor-9-options', '1006 – Computer Laboratory', 'A computer laboratory in a university is a dedicated space equipped with computer hardware, software, and other equipment necessary for computer-based teaching and learning activities. These labs are often used for computer science courses, programming classes, and other computer-based courses offered by the university.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-10f-4', 'building-hpsb-floor-9-options', 'Student Center', 'The Student Center is a hub for various student services and activities on campus. It offers resources such as study spaces, meeting rooms, a student lounge, and event spaces for student organizations and university-sponsored events.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-10f-5', 'building-hpsb-floor-9-options', '1012 – Multimedia Room', 'A Multimedia Room in a university is a dedicated space equipped with various multimedia equipment, such as projectors, sound systems, and large screens, used for presentations, lectures, and events. It is designed to facilitate the integration of different forms of media and enhance the learning experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-10f-6', 'building-hpsb-floor-9-options', 'Higher School ng UMak Classrooms', 'Higher School ng UMak Classrooms refer to the classrooms used by the senior high school department of the University of Makati, which offers academic tracks in STEM, ABM, HUMSS, and GAS. These classrooms are equipped with modern facilities and technologies to support the students\' learning needs.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-1', 'building-hpsb-floor-10-options', 'Fitness Gym', 'The Fitness Gym is a well-equipped facility located in the university that offers various exercise equipment and training programs to promote a healthy lifestyle among students, faculty, and staff. It provides a convenient and affordable way for members to stay active and reach their fitness goals while also fostering a sense of community and camaraderie.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-2', 'building-hpsb-floor-10-options', 'Aero Dance Studio', 'An Aero Dance Studio is a dedicated space for aerobic dance training and fitness activities. It is equipped with specialized flooring, mirrors, sound systems, and lighting for effective training and practice sessions.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-3', 'building-hpsb-floor-10-options', 'Dance Studio', 'A Dance Studio is a specialized facility that is equipped with flooring, mirrors, and a sound system for dance rehearsals, choreography classes, and performances. It is a creative and vibrant space for dancers of all skill levels to express themselves and perfect their craft.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-4', 'building-hpsb-floor-10-options', 'Cafeteria', 'The university cafeteria is a dining facility that provides students, faculty, and staff with a variety of food options for breakfast, lunch, and dinner. It serves as a social hub where members of the university community can gather and enjoy meals together.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-5', 'building-hpsb-floor-10-options', 'Clinic', 'The university clinic is a medical facility located on campus that provides healthcare services to students and staff, such as consultations, treatment, and first aid for minor injuries and illnesses.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-6', 'building-hpsb-floor-10-options', 'Sauna', 'A sauna is a facility in the university that provides a heated room or small house specifically designed for relaxation and body cleansing through perspiration.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-11f-7', 'building-hpsb-floor-10-options', '1101 Multimedia Room', 'A Multimedia Room in a university is a dedicated space equipped with various multimedia equipment, such as projectors, sound systems, and large screens, used for presentations, lectures, and events. It is designed to facilitate the integration of different forms of media and enhance the learning experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-12f-1', 'building-hpsb-floor-11-options', 'Basketball Court', 'Basketball court is where students can engage in sports and physical activities. The court is equipped with standard equipment and facilities to ensure a safe and enjoyable experience for players.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-12f-2', 'building-hpsb-floor-11-options', 'Volleyball Court', 'Volleyball court available for students and faculty to use. It is equipped with all the necessary equipment for a game of volleyball.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-12f-3', 'building-hpsb-floor-11-options', 'PE Department', 'The Physical Education (PE) Department in a university is responsible for designing and implementing programs that promote physical fitness and well-being among students. ', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-12f-4', 'building-hpsb-floor-11-options', 'Shower Room', 'The shower room is a facility in the university that provides a space for students and faculty to shower and change after physical activities such as workouts, sports, and etc.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-12f-5', 'building-hpsb-floor-11-options', 'Locker Room', 'A locker room is a facility in the university where students and staff can store their personal belongings and change their clothes. It is equipped with lockers, benches, and other amenities to provide a comfortable and secure environment for users.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-1t3f-1', 'building-hpsb-floor-2-options', 'Parking Area', 'The parking area in the university is a designated space for vehicles where students, faculty members, and visitors can park their cars while on campus. It is typically divided into different zones or sections to manage parking space availability and to ensure that traffic flow is efficient.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-4f-1', 'building-hpsb-floor-3-options', '401, 402 – Building Management System Office', 'The Building Management System Office is responsible for monitoring and controlling the various building systems of the university, such as heating, ventilation, air conditioning, and lighting, to ensure optimal efficiency and comfort for its occupants. They also handle maintenance and repairs for these systems as needed.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-4f-2', 'building-hpsb-floor-3-options', 'Parking Area', 'The parking area in the university is a designated space for vehicles where students, faculty members, and visitors can park their cars while on campus. It is typically divided into different zones or sections to manage parking space availability and to ensure that traffic flow is efficient.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-5f-1', 'building-hpsb-floor-4-options', 'School of Law Dean’s Office', 'The School of Law Dean\'s Office is the administrative hub of the law school, overseeing the day-to-day operations and management of the faculty and staff, as well as providing support to students and alumni. It serves as the liaison between the law school and the wider university community, and is responsible for upholding the school\'s academic and ethical standards.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-5f-2', 'building-hpsb-floor-4-options', 'School of Law Library Learning Commons', 'School of Law Library Learning Commons Description', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-5f-3', 'building-hpsb-floor-4-options', '504, 505 – Moot Court', 'A Moot Court is a simulated court proceeding that law students participate in to gain practical experience in arguing cases and applying legal principles. It is usually set up like a real courtroom and involves presenting legal arguments before a panel of judges or a judge.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-5f-4', 'building-hpsb-floor-4-options', '506, 508-512 – Lecture Rooms', 'The Lecture Rooms in the university are spacious and equipped with modern technologies to facilitate the learning process. They are designed to provide a comfortable environment for students to engage in classroom discussions and activities.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-5f-5', 'building-hpsb-floor-4-options', '507 – Multimedia Room', 'A Multimedia Room in a university is a dedicated space equipped with various multimedia equipment, such as projectors, sound systems, and large screens, used for presentations, lectures, and events. It is designed to facilitate the integration of different forms of media and enhance the learning experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-6f-1', 'building-hpsb-floor-5-options', '601-605, 607-614 – Lecture Rooms', 'The Lecture Rooms in the university are spacious and equipped with modern technologies to facilitate the learning process. They are designed to provide a comfortable environment for students to engage in classroom discussions and activities.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-6f-2', 'building-hpsb-floor-5-options', '606 Computer Laboratory', 'The Computer Laboratory in the university is a facility equipped with computers and other technological resources where students can access software, databases, and the internet to support their learning and research. It also provides students with opportunities to gain hands-on experience in using computer programs and tools relevant to their field of study.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-6f-3', 'building-hpsb-floor-5-options', 'Student Center', 'The Student Center in the University is a facility designed to serve as a hub of student activities and services, providing a comfortable and engaging environment for students to socialize, study, and access resources. It houses various amenities such as lounge areas, meeting rooms, study spaces, food establishments, and recreational facilities.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-6f-4', 'building-hpsb-floor-5-options', '615, 617 – Skills Laboratory', 'Skills Laboratories in universities are specialized facilities designed for hands-on training and simulations that allow students to develop practical skills and competencies related to their field of study. These labs are equipped with state-of-the-art tools, equipment, and software that enable students to gain real-world experience and prepare them for their future professions.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-7f-1', 'building-hpsb-floor-6-options', '701 – Multimedia Room', 'A Multimedia Room in a university is a dedicated space equipped with various multimedia equipment, such as projectors, sound systems, and large screens, used for presentations, lectures, and events. It is designed to facilitate the integration of different forms of media and enhance the learning experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-7f-2', 'building-hpsb-floor-6-options', '702 to 707 – Lecture Room', 'The Lecture Room in the university are spacious and equipped with modern technologies to facilitate the learning process. They are designed to provide a comfortable environment for students to engage in classroom discussions and activities.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-7f-3', 'building-hpsb-floor-6-options', 'Simulated Hospital', 'A Simulated Hospital is a facility designed to mimic the environment and functions of a real hospital, providing students with hands-on training opportunities in a controlled setting.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-7f-4', 'building-hpsb-floor-6-options', '708, 709 – Laboratories', 'The Laboratories in the university are equipped with modern facilities and state-of-the-art equipment to support research and experimentation. They provide a hands-on learning experience for students and enable them to apply theoretical knowledge to real-life situations.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-7f-5', 'building-hpsb-floor-6-options', '710, 712 – Skills Laboratories', 'Skills Laboratories in universities are specialized facilities designed for hands-on training and simulations that allow students to develop practical skills and competencies related to their field of study. These labs are equipped with state-of-the-art tools, equipment, and software that enable students to gain real-world experience and prepare them for their future professions.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-8f-1', 'building-hpsb-floor-7-options', '801-805, 807-814 – Lecture Rooms', '801-805, 807-814 – Lecture Rooms Description', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-8f-2', 'building-hpsb-floor-7-options', '806 – Computer Laboratory', 'The computer laboratory in the university is a facility equipped with computers and other technological resources where students can access software, databases, and the internet to support their learning and research. It also provides students with opportunities to gain hands-on experience in using computer programs and tools relevant to their field of study.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-8f-3', 'building-hpsb-floor-7-options', 'Student Center', 'The Student Center in the University is a facility designed to serve as a hub of student activities and services, providing a comfortable and engaging environment for students to socialize, study, and access resources. It houses various amenities such as lounge areas, meeting rooms, study spaces, food establishments, and recreational facilities.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-8f-4', 'building-hpsb-floor-7-options', '815, 817 – Skills Laboratories', 'Skills Laboratories in universities are specialized facilities designed for hands-on training and simulations that allow students to develop practical skills and competencies related to their field of study. These labs are equipped with state-of-the-art tools, equipment, and software that enable students to gain real-world experience and prepare them for their future professions.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-1', 'building-hpsb-floor-8-options', 'Central Laboratory', 'The Central Laboratory is a facility in the university that serves as the main hub for various laboratory services such as chemical, biological, and physical analysis. It provides state-of-the-art equipment and tools to support research, experimentation, and analysis for students and faculty across different disciplines.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-10', 'building-hpsb-floor-8-options', 'Center for Planning and Development', 'The Center for Planning and Development is responsible for the planning, development, and implementation of the university\'s programs and projects. It also serves as a research and extension arm of the university, providing assistance to various organizations and communities in the fields of education, science, and technology.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-11', 'building-hpsb-floor-8-options', 'Center for Curriculum and Materials Development', 'Center for Curriculum and Materials Development Description', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-2', 'building-hpsb-floor-8-options', 'Pharmacy Laboratories', 'The Pharmacy Laboratories in the university are equipped with state-of-the-art facilities to provide students with hands-on experience in various fields of pharmacy, including pharmaceutical chemistry, pharmacology, and pharmacognosy. These laboratories are designed to help students develop their skills and knowledge in drug formulation, drug analysis, and quality control.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-3', 'building-hpsb-floor-8-options', 'Science Research Laboratory', 'The Science Research Laboratory in the university is a state-of-the-art facility equipped with advanced equipment and instruments that enable students and researchers to conduct cutting-edge scientific research in various fields. The laboratory provides a platform for students to engage in hands-on experiments and research, fostering critical thinking, and problem-solving skills.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-4', 'building-hpsb-floor-8-options', '901 – Multimedia Room', 'A Multimedia Room in a university is a dedicated space equipped with various multimedia equipment, such as projectors, sound systems, and large screens, used for presentations, lectures, and events. It is designed to facilitate the integration of different forms of media and enhance the learning experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-5', 'building-hpsb-floor-8-options', '902, 906, 907, 908, 909 – Laboratories', 'The Laboratories in the university are equipped with modern facilities and state-of-the-art equipment to support research and experimentation. They provide a hands-on learning experience for students and enable them to apply theoretical knowledge to real-life situations.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-6', 'building-hpsb-floor-8-options', 'Simulated Hospital / Health Institutes Office', 'The Simulated Hospital/Health Institutes Office is a facility in the university that provides a realistic hospital setting for students to train and develop their healthcare skills. It is equipped with modern medical equipment and facilities for the students to simulate real-life medical scenarios and gain practical experience.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-7', 'building-hpsb-floor-8-options', 'Vice President for Planning and Research', 'The Vice President for Planning and Research is an administrative position in a university responsible for overseeing and coordinating planning and research activities. This includes developing and implementing strategic plans, overseeing research programs and initiatives, and ensuring compliance with relevant regulations and policies.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-8', 'building-hpsb-floor-8-options', 'Center for Quality Management', 'The Center for Quality Management in a university is responsible for implementing and ensuring the quality of educational programs and services through continuous monitoring, evaluation, and improvement processes. It also conducts training and development programs for faculty and staff to enhance their skills and knowledge in delivering quality education.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-9f-9', 'building-hpsb-floor-8-options', 'Center for University Research', 'The Center for University Research is a facility in the university that is dedicated to promoting research among its students and faculty. It provides support and resources to help researchers carry out their studies, and also fosters collaboration and interdisciplinary research among different departments and schools within the university.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-gf-1', 'building-hpsb-floor-1-options', 'Main Lobby', 'The Main Lobby of a university is the central hub where students, faculty, and visitors can access information, directions, and services. It often serves as the first point of contact and gives a glimpse of the campus culture and identity.', '/media/UmakDiscovery/discoveries-hpsb.png'),
('hpsb-gf-2', 'building-hpsb-floor-1-options', 'Parking Area', 'The parking area in the university is a designated space for vehicles where students, faculty members, and visitors can park their cars while on campus. It is typically divided into different zones or sections to manage parking space availability and to ensure that traffic flow is efficient.', '/media/UmakDiscovery/discoveries-hpsb.png');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` varchar(100) NOT NULL,
  `building_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `building_id`, `name`) VALUES
('building-ab1-floor-1-options', 'building-ab1', 'First Floor'),
('building-ab1-floor-2-options', 'building-ab1', 'Second Floor'),
('building-ab1-floor-3-options', 'building-ab1', 'Third Floor'),
('building-ab1-floor-4-options', 'building-ab1', 'Fourth Floor'),
('building-ab2-floor-1-options', 'building-ab2', 'First Floor'),
('building-ab2-floor-2-options', 'building-ab2', 'Second Floor'),
('building-ab2-floor-3-options', 'building-ab2', 'Third Floor'),
('building-ab2-floor-4-options', 'building-ab2', 'Fourth Floor'),
('building-ab3-floor-1-options', 'building-ab3', 'First Floor'),
('building-ab3-floor-2-options', 'building-ab3', 'Second Floor'),
('building-ab3-floor-3-options', 'building-ab3', 'Third Floor'),
('building-ab3-floor-4-options', 'building-ab3', 'Fourth Floor'),
('building-admin-floor-1-options', 'building-admin', 'Basement Level'),
('building-admin-floor-2-options', 'building-admin', 'Ground Floor'),
('building-admin-floor-3-options', 'building-admin', 'Mezzannine Level'),
('building-admin-floor-4-options', 'building-admin', 'Second Floor'),
('building-admin-floor-5-options', 'building-admin', 'Third Floor'),
('building-admin-floor-6-options', 'building-admin', 'Fourth Floor'),
('building-admin-floor-7-options', 'building-admin', 'Fifth Floor'),
('building-admin-floor-8-options', 'building-admin', 'Sixth Floor'),
('building-admin-floor-9-options', 'building-admin', 'Sixth Floor Mezanine Level'),
('building-hpsb-floor-1-options', 'building-hpsb', 'Ground Floor'),
('building-hpsb-floor-10-options', 'building-hpsb', 'Eleventh Floor'),
('building-hpsb-floor-11-options', 'building-hpsb', 'Twelveth Floor'),
('building-hpsb-floor-12-options', 'building-hpsb', 'Roofdeck'),
('building-hpsb-floor-2-options', 'building-hpsb', 'First to Third Floor'),
('building-hpsb-floor-3-options', 'building-hpsb', 'Fourth Floor'),
('building-hpsb-floor-4-options', 'building-hpsb', 'Fifth Floor'),
('building-hpsb-floor-5-options', 'building-hpsb', 'Sixth Floor'),
('building-hpsb-floor-6-options', 'building-hpsb', 'Seventh Floor'),
('building-hpsb-floor-7-options', 'building-hpsb', 'Eighth Floor'),
('building-hpsb-floor-8-options', 'building-hpsb', 'Ninth Floor'),
('building-hpsb-floor-9-options', 'building-hpsb', 'Tenth Floor'),
('building-stadium-floor-1-options', 'building-stadium', 'Bleachers'),
('building-stadium-floor-2-options', 'building-stadium', 'Umak Oval');

-- --------------------------------------------------------

--
-- Table structure for table `followtable`
--

CREATE TABLE `followtable` (
  `FollowID` int(10) NOT NULL,
  `FollowerID` int(10) NOT NULL,
  `FollowingID` int(10) NOT NULL,
  `FollowDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followtable`
--

INSERT INTO `followtable` (`FollowID`, `FollowerID`, `FollowingID`, `FollowDate`) VALUES
(1, 4, 1, '2023-05-01 10:47:47'),
(2, 5, 1, '2023-05-01 10:47:47'),
(3, 1, 2, '2023-05-01 10:49:39'),
(4, 4, 2, '2023-05-01 10:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `PVBg` varchar(200) NOT NULL,
  `FMBg` varchar(200) NOT NULL,
  `FPBg` varchar(200) NOT NULL,
  `FacilityId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `PVBg`, `FMBg`, `FPBg`, `FacilityId`) VALUES
(1, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-1'),
(2, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-2'),
(3, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-3'),
(4, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-4'),
(5, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-5'),
(6, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-bl-6'),
(10, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-1'),
(11, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-2'),
(12, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-3'),
(13, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-4'),
(14, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-5'),
(15, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-6'),
(16, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-7'),
(17, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-3f-8'),
(18, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-4f-1'),
(19, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-4f-2'),
(20, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-4f-3'),
(21, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-4f-4'),
(22, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-5f-1'),
(23, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-5f-2'),
(24, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-5f-3'),
(25, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-5f-4'),
(26, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-5f-5'),
(27, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6f-1'),
(28, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6f-2'),
(29, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6f-3'),
(30, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6f-4'),
(31, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6f-5'),
(32, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6fml-1'),
(33, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab-6fml-2'),
(34, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-gf-1'),
(35, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-gf-2'),
(36, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-1t3f-1'),
(37, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-4f-1'),
(38, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-4f-2'),
(39, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-5f-1'),
(40, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-5f-2'),
(41, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-5f-3'),
(42, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-5f-4'),
(43, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-5f-5'),
(44, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-6f-1'),
(45, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-6f-2'),
(46, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-6f-3'),
(47, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-6f-4'),
(48, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-7f-1'),
(49, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-7f-2'),
(50, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-7f-3'),
(51, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-7f-4'),
(52, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-7f-5'),
(53, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-8f-1'),
(54, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-8f-2'),
(55, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-8f-3'),
(56, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-8f-4'),
(57, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-1'),
(58, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-2'),
(59, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-3'),
(60, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-4'),
(61, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-5'),
(62, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-6'),
(63, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-7'),
(64, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-8'),
(65, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-9'),
(66, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-10'),
(67, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-9f-11'),
(68, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-1'),
(69, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-2'),
(70, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-3'),
(71, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-4'),
(72, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-5'),
(73, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-10f-6'),
(74, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-1'),
(75, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-2'),
(76, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-3'),
(77, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-4'),
(78, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-5'),
(79, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-6'),
(80, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-11f-7'),
(81, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-12f-1'),
(82, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-12f-2'),
(83, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-12f-3'),
(84, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-12f-4'),
(85, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'hpsb-12f-5'),
(95, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab3-1f-1'),
(96, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab3-1f-2'),
(97, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab3-1f-3'),
(98, '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', '/media/UmakDiscovery/basement-picture-1.png', 'ab3-1f-4');

-- --------------------------------------------------------

--
-- Table structure for table `hangouts`
--

CREATE TABLE `hangouts` (
  `id` varchar(255) NOT NULL,
  `filter` varchar(100) DEFAULT NULL,
  `floor_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tracker` int(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `saved` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangouts`
--

INSERT INTO `hangouts` (`id`, `filter`, `floor_id`, `name`, `image_url`, `description`, `tracker`, `status`, `saved`, `time`) VALUES
('ab-1f-c', 'Availability of Foods', 'building-admin-floor-1-options', 'Canteen', 'canteen.jpg', 'A Canteen is a cafeteria or dining hall where students can purchase food and drinks. The canteen provides a convenient and accessible space for students to have a meal or snack while at school.\r\n', 60, 'Busy', 'Yes', '6:00 AM - 5:30 PM'),
('ab1-2f-sl', 'Student Areas', 'building-ab1-floor-2-options', 'Student Lounge', 'studentlounge.jpg', 'Student Lounge are spaces where students can gather, socialize, and study outside of the classroom environment.', 15, 'Light', 'Yes', '6:00 AM - 6:00 PM'),
('ab1-2f-sl2', 'Inside Hangouts', 'building-ab1-floor-2-options', 'Student Lounge', 'studentlounge.jpg', 'Student Lounge are spaces where students can gather, socialize, and study outside of the classroom environment.', 15, 'Light', 'Yes', '6:00 AM - 6:00 PM'),
('ab1-3f-sh', 'Quite Study Spaces', 'building-ab1-floor-3-options', 'Study Hall', 'studyhall.jpg', 'A Study Hall is a supervised environment where students can work on assignments, study for exams, or engage in quiet reading. It is typically a quiet and independent space free from distractions. ', 27, 'Moderate', 'No', '6:30 AM - 7:30 PM'),
('ab2-1f-fs', 'Availability of Foods', 'building-ab2-floor-1-options', 'Food Stalls', 'foodstalls.png', 'Food Stalls in university are convenient options for students and staff to grab a quick meal or snack. They offer a variety of affordable and tasty options, making them a popular choice for those on campus.', 53, 'Busy', 'Yes', '9:00 AM - 6:30 PM'),
('ab2-3f-l', 'Quite Study Spaces', 'building-ab2-floor-3-options', 'Library', 'library.jpg', 'A Library serves as a center for learning and research, providing students with access to a wealth of knowledge and information.', 10, 'Light', 'Yes', '7:00 AM - 5:30 PM'),
('ab3-1f-cr', 'Quiet Study Spaces', 'building-ab3-floor-1-options', 'Computer Room', 'computerroom.jpg', 'A Computer Room is a physical space within an educational institution, library, or workplace that is equipped with computers, related hardware, and software for users to complete computer-based tasks.', 25, 'Moderate', 'No', '7:00 AM - 6:00 PM'),
('ab3-4f-c', 'Availability of Foods', 'building-ab3-floor-4-options', 'Canteen', 'canteen.jpg', 'A Canteen is a cafeteria or dining hall where students can purchase food and drinks. The canteen provides a convenient and accessible space for students to have a meal or snack while at school.\r\n', 51, 'Busy', 'Yes', '6:00 AM - 5:30 PM'),
('hpsb-11f-c', 'Availability of Foods', 'building-hpsb-floor-10-options', 'Canteen', 'canteen.jpg', 'A Canteen is a cafeteria or dining hall where students can purchase food and drinks. The canteen provides a convenient and accessible space for students to have a meal or snack while at school.', 55, 'Busy', 'Yes', '6:00 AM - 5:30 PM'),
('hpsb-11f-fg', 'Inside Hangouts', 'building-hpsb-floor-10-options', 'Fitness Gym', 'fitnessgym.jpg', 'A Fitness Gym is designed for students to engage in physical exercise and fitness-related activities.', 30, 'Moderate', 'Yes', '8:00 AM - 5:30 PM'),
('hpsb-11f-fg2', 'Most Popular', 'building-hpsb-floor-10-options', 'Fitness Gym', 'fitnessgym.jpg', 'A Fitness Gym is designed for students to engage in physical exercise and fitness-related activities.', 30, 'Moderate ', 'Yes', '8:00 AM - 5:30 PM'),
('hpsb-11f-s', 'Inside Hangouts', 'building-hpsb-floor-10-options', 'Sauna', 'Sauna.jpg', 'A Sauna is a space designed for students to experience the health and wellness benefits of heat therapy.', 25, 'Moderate', 'No', '8:00 AM - 6:30 PM'),
('hpsb-1f-fs', 'Most Popular', 'building-hpsb-floor-1-options', 'Food Stalls', 'foodstalls.jpg', 'Food Stalls in university are convenient options for students and staff to grab a quick meal or snack. They offer a variety of affordable and tasty options, making them a popular choice for those on campus.', 70, 'Busy', 'Yes', '9:00 AM - 6:30 PM'),
('hpsb-1f-fs2', 'Availability of Foods', 'building-hpsb-floor-1-options', 'Food Stalls', 'foodstalls.jpg', 'Food Stalls in university are convenient options for students and staff to grab a quick meal or snack. They offer a variety of affordable and tasty options, making them a popular choice for those on campus.', 70, 'Busy', 'No', '9:00 AM - 6:30 PM'),
('hpsb-5f-l', 'Quiet Study Spaces', 'building-hpsb-floor-4-options', 'Library', 'library.jpg', 'A Library serves as a center for learning and research, providing students with access to a wealth of knowledge and information.\r\n', 7, 'Light', 'Yes', '7:00 AM - 5:30 PM'),
('s-1f-ss', 'Student Areas', 'building-stadium-floor-1-options', 'Social Space', 'socialspace.jpg', 'Social space an area or environment designed to facilitate social interactions between individuals or groups.', 300, 'Packed', 'Yes', '5:00 AM - 9:00 PM'),
('s-1f-ss2', 'Outside Hangouts', 'building-stadium-floor-1-options', 'Social Space', 'socialspace.jpg', 'Social space an area or environment designed to facilitate social interactions between individuals or groups.', 10, 'Light', 'No', '5:00 AM - 9:00 PM'),
('s-2f-fb', 'Availability of Foods', 'building-stadium-floor-2-options', 'Food Booths', 'foodbooths.jpg', 'Food Booths are small, temporary structures or kiosks that offer a variety of food items for sale. ', 250, 'Packed', 'Yes', '9:00 AM - 6:30 PM'),
('s-2f-fb2', 'Most Popular ', 'building-stadium-floor-2-options', 'Food Booths', 'foodbooths.jpg ', 'Food Booths are small, temporary structures or kiosks that offer a variety of food items for sale. ', 250, 'Packed', 'Yes', '9:00 AM - 6:30 PM'),
('s-2f-fb3', 'Outside Hangouts', 'building-stadium-floor-2-options', 'Food Booths', 'foodbooths.jpg', 'Food Booths are small, temporary structures or kiosks that offer a variety of food items for sale.', 250, 'Packed', 'Yes', '9:00 AM - 6:30 PM'),
('s-2f-uo', 'Student Areas', 'building-stadium-floor-2-options', 'Umak Oval', 'umakoval.jpg', 'UMAK Oval an outdoor oval-shaped track and field facility that is primarily used for athletics training and events.', 110, 'Crowded', 'No', '5:00 AM - 9:00 PM'),
('s-2f-uo2', 'Outside Hangouts', 'building-stadium-floor-2-options', 'Umak Oval', 'umakoval.jpg', 'UMAK Oval an outdoor oval-shaped track and field facility that is primarily used for athletics training and events.', 110, 'Crowded', 'No', '5:00 AM - 9:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `hangouts_gallery`
--

CREATE TABLE `hangouts_gallery` (
  `id` int(11) NOT NULL,
  `PVBg` varchar(200) NOT NULL,
  `FMBg` varchar(200) NOT NULL,
  `FPBg` varchar(200) NOT NULL,
  `HangoutsId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangouts_gallery`
--

INSERT INTO `hangouts_gallery` (`id`, `PVBg`, `FMBg`, `FPBg`, `HangoutsId`) VALUES
(1, '/media/UmakDiscovery/discoveries-admin.png', '/media/UmakDiscovery/discoveries-admin.png', '/media/UmakDiscovery/discoveries-admin.png', 'ab-1f-c'),
(3, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab1-2f-sl'),
(4, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab2-3f-l'),
(5, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab3-1f-cr'),
(6, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab3-4f-c'),
(7, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-5f-l'),
(8, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-11f-c'),
(9, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-11f-fg'),
(10, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-11f-s'),
(11, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-1f-fs'),
(12, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab1-2f-sl2'),
(13, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab1-3f-sh'),
(14, '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', '/media/UmakDiscovery/discoveries-academicbldg1.png', 'ab2-1f-fs'),
(15, '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', '/media/UmakDiscovery/discoveries-hpsb.png', 'hpsb-1f-fs2'),
(16, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-1f-ss'),
(18, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-1f-ss2'),
(19, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-2f-fb'),
(20, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-2f-fb2'),
(21, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-2f-fb3'),
(22, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-2f-uo'),
(24, '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', '/media/UmakDiscovery/discoveries-stadium.png', 's-2f-uo2');

-- --------------------------------------------------------

--
-- Table structure for table `nearestarea`
--

CREATE TABLE `nearestarea` (
  `Id` int(11) NOT NULL,
  `nearestAreaName` varchar(50) NOT NULL,
  `nearestAreaDistance` varchar(50) NOT NULL,
  `nearestAreaBg` varchar(200) NOT NULL,
  `FacilityId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nearestarea`
--

INSERT INTO `nearestarea` (`Id`, `nearestAreaName`, `nearestAreaDistance`, `nearestAreaBg`, `FacilityId`) VALUES
(1, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-1'),
(2, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-2'),
(3, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-3'),
(4, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-4'),
(5, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-5'),
(6, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-bl-6'),
(10, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-1'),
(11, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-2'),
(12, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-3'),
(13, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-4'),
(14, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-5'),
(15, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-6'),
(16, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-7'),
(17, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-3f-8'),
(18, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-4f-1'),
(19, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-4f-2'),
(20, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-4f-3'),
(21, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-4f-4'),
(22, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-5f-1'),
(23, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-5f-2'),
(24, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-5f-3'),
(25, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-5f-4'),
(26, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-5f-5'),
(27, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6f-1'),
(28, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6f-2'),
(29, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6f-3'),
(30, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6f-4'),
(31, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6f-5'),
(32, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6fml-1'),
(33, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'ab-6fml-2'),
(34, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-gf-1'),
(35, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-gf-2'),
(36, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-1t3f-1'),
(37, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-4f-1'),
(38, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-4f-2'),
(39, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-5f-1'),
(40, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-5f-2'),
(41, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-5f-3'),
(42, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-5f-4'),
(43, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-5f-5'),
(44, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-6f-1'),
(45, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-6f-2'),
(46, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-6f-3'),
(47, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-6f-4'),
(48, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-7f-1'),
(49, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-7f-2'),
(50, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-7f-3'),
(51, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-7f-4'),
(52, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-7f-5'),
(53, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-8f-1'),
(54, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-8f-2'),
(55, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-8f-3'),
(56, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-8f-4'),
(57, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-1'),
(58, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-2'),
(59, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-3'),
(60, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-4'),
(61, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-5'),
(62, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-6'),
(63, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-7'),
(64, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-8'),
(65, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-9'),
(66, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-10'),
(67, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-9f-11'),
(68, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-1'),
(69, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-2'),
(70, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-3'),
(71, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-4'),
(72, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-5'),
(73, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-10f-6'),
(74, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-1'),
(75, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-2'),
(76, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-3'),
(77, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-4'),
(78, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-5'),
(79, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-6'),
(80, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-11f-7'),
(81, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-12f-1'),
(82, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-12f-2'),
(83, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-12f-3'),
(84, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-12f-4'),
(85, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictuovery/basement-picture-1.png', 'hpsb-12f-5'),
(95, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictubasement-pictuovery/basement-picture-1.png', 'ab3-1f-1'),
(96, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictubasement-pictuovery/basement-picture-1.png', 'ab3-1f-2'),
(97, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictubasement-pictuovery/basement-picture-1.png', 'ab3-1f-3'),
(98, 'Umak Food Stalls', '0 meters away', '/media/UmakDiscovery/basement-pictubasement-pictuovery/basement-picture-1.png', 'ab3-1f-4');

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `LikeID` int(10) NOT NULL,
  `WhoLikedID` int(10) NOT NULL,
  `PostLikedID` int(10) NOT NULL,
  `PostLikeCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`LikeID`, `WhoLikedID`, `PostLikedID`, `PostLikeCreated`) VALUES
(20, 1, 4, '2023-05-01 20:36:12'),
(21, 1, 1, '2023-05-02 05:43:05'),
(22, 1, 1, '2023-05-02 05:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `recent_incidents`
--

CREATE TABLE `recent_incidents` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_incidents`
--

INSERT INTO `recent_incidents` (`id`, `title`, `description`) VALUES
(1, 'Students Get Stuck in Elevator', ' A group of high school students found themselves stuck in an elevator while on their way to class. They pressed the emergency button and waited for help to arrive. The school administration quickly notified the fire department, who rescued the students without any injuries. The incident caused some disruption to the school day, but classes were able to resume once the situation was resolved.');

-- --------------------------------------------------------

--
-- Table structure for table `report_emergencies`
--

CREATE TABLE `report_emergencies` (
  `id` int(11) NOT NULL,
  `reporter` varchar(100) NOT NULL,
  `emergency_type` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `floor` varchar(100) DEFAULT NULL,
  `room` varchar(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_emergencies`
--

INSERT INTO `report_emergencies` (`id`, `reporter`, `emergency_type`, `building`, `floor`, `room`, `description`, `mobile_number`, `date`, `time`) VALUES
(1, 'Edgar Palen Jr.', 'There is a fire in the chemistry lab.', 'Health and Physical Science Building', 'Ninth Floor', '908', 'A fire had broken out in the chemistry lab due to a chemical reaction or other hazard.', '09218833772\r\n', '2023-04-11', '03:28:58'),
(2, 'John Lemuell Bacolod', 'A student collapses in the hallway and is unresponsive, requiring CPR and an ambulance.', 'Academic Building I', 'Second Floor', '204', 'A student had suffered a sudden cardiac event, seizure, or other medical emergency that caused them to collapse.', '09957733887', '2023-02-22', '09:49:18'),
(3, 'Airich Jay Diawan', 'A student has a severe allergic reaction and requires immediate medical attention.', 'Academic Building III', 'Fourth Floor', '410', 'A student had eaten or come into contact with an allergen, causing a life-threatening reaction.', '09973388116', '2023-03-14', '11:49:48'),
(18, 'Airich Jay Diawan', 'Explosion', 'Health and Physical Science Building', 'Ninth Floor', '111', 'An explosion occurred in the chemistry lab,  several students and staff members are injured.', '09178336267', '2023-05-01', '18:02:14'),
(19, 'Airich Jay Diawan', 'Severe Weather (e.g. tornado, hurricane)', 'Umak Stadium', 'Bleachers', '116', 'Severe Weatherrrrr', '091783362672323', '2023-05-01', '22:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `report_incidents`
--

CREATE TABLE `report_incidents` (
  `id` int(11) NOT NULL,
  `reporter` varchar(100) NOT NULL,
  `incident_type` varchar(100) DEFAULT NULL,
  `building` varchar(100) NOT NULL,
  `floor` varchar(100) DEFAULT NULL,
  `room` varchar(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `evidence` blob DEFAULT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_incidents`
--

INSERT INTO `report_incidents` (`id`, `reporter`, `incident_type`, `building`, `floor`, `room`, `description`, `evidence`, `mobile_number`, `date`, `time`) VALUES
(1, 'Airich Jay Diawan', 'A student breaks a window with a ball during recess.', 'Health and Physical Science Building', 'Tenth Floor', 'Canteen', 'A student had accidentally thrown a ball too hard, causing it to break a window.', 0x62726f6b656e77696e646f772e6a7067, '09957733887', '2023-04-04', '12:50:20'),
(2, 'John Lemuell Bacolood', 'A student gets into a verbal argument with a teacher during class.', 'Academic Building III', 'Second Floor', '205', 'A student had become frustrated with the teacher during class and engaged in a heated exchange of words.', 0x76657262616c617267756d656e742e6a7067, '09959911882', '2023-04-10', '07:50:49'),
(3, 'Edgar Palen Jr.', 'A student damages school property by drawing on the walls in the restroom with permanent marker.', 'Academic Building II', 'Third Floor', '312', 'During a break between classes, a student enters the restroom and uses a permanent marker to write their name on the walls.', 0x76616e64616c69736d2e6a7067, '09238822664\r\n', '2023-03-20', '09:51:10'),
(14, 'Edgar Palen Jr.', 'Bullying', 'Academic Building III', 'First Floor', '110', 'A student was physically and verbally assaulted by a group of students in the school hallway.', 0x62756c6c792e6a7067, '09957733887', '2023-05-01', '17:57:24'),
(15, 'Edgar Palen Jr.', 'Physical altercations or threats of violence', 'Admin Building', 'Tenth Floor', '101', 'Helppppp', 0x70686f746f5f323032332d30352d30315f31352d32372d3031202d20436f70792e6a7067, '12345678', '2023-05-01', '22:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `review_hangouts`
--

CREATE TABLE `review_hangouts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `rate` int(10) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `hangouts_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_hangouts`
--

INSERT INTO `review_hangouts` (`id`, `user_id`, `rate`, `date`, `description`, `hangouts_id`) VALUES
(1, 'A12137227', 3, '2023-02-14', 'The furniture in the student lounge is worn and the lighting is dim, but it\'s a decent spot to take a break.', 'ab1-2f-sl'),
(2, 'A12137244', 5, '2023-03-22', 'The student lounge is a fantastic place to relax.', 'ab1-2f-sl'),
(3, 'A12137256', 4, '2023-02-06', 'The student lounge is a comfortable and spacious place to hang out, though it can get noisy at times.', 'ab1-2f-sl'),
(4, 'K11935433', 4, '2023-04-03', 'The library is a great resource with an extensive selection of materials, but it can get busy during peak hours.', 'ab2-3f-l'),
(5, 'K11935456', 3, '2023-03-10', 'While the library has a decent selection of books and study spaces, some areas may be crowded during busy times.', 'ab2-3f-l'),
(6, 'K11937297', 5, '2023-03-17', 'The library is an excellent resource with helpful staff, plenty of computers and study spaces, and frequent events and workshops.', 'ab2-3f-l'),
(7, 'K11937320', 4, '2023-01-13', 'The computer room has a good selection of up-to-date computers and software, but it can get quite warm and stuffy in there during peak hours.', 'ab3-1f-cr'),
(8, 'K11938967', 5, '2023-03-09', 'The computer room is fantastic, with fast and reliable computers, a wide range of software, and helpful staff on hand to assist with any issues.', 'ab3-1f-cr'),
(9, 'K11940758', 5, '2023-02-11', 'The computer room is a great resource for students, with plenty of computers available and a quiet atmosphere for working on assignments or research.', 'ab3-1f-cr'),
(10, 'K11941803', 4, '2023-02-17', 'The canteen has a decent selection of food and drinks, with reasonable prices, but the seating area can get crowded during peak hours.', 'ab3-4f-c'),
(11, 'A12137227', 5, '2023-03-28', 'The canteen is great, with a wide range of delicious and healthy food options, plenty of seating, and friendly staff.', 'ab3-4f-c'),
(12, 'A12137244', 4, '2023-04-05', 'The canteen has tasty food and a relaxed atmosphere, but the prices can be a bit high for some items.', 'ab3-4f-c'),
(16, 'K11937297', 4, '2023-02-05', 'The food stall has a decent variety of dishes at affordable prices, but the wait times can be long during peak hours.', 'ab2-1f-fs'),
(17, 'K11937320', 5, '2023-02-09', 'The food stall is excellent, with a diverse menu of tasty and fresh dishes, friendly staff, and quick service.', 'ab2-1f-fs'),
(18, 'K11938967', 4, '2023-03-25', 'The food stall has some great options and reasonable prices, but the seating area is limited and can get crowded.', 'ab2-1f-fs'),
(19, 'K11940758', 3, '2023-03-07', 'The fitness gym has a good selection of equipment and classes, but it can get quite crowded during peak hours and some of the machines are in need of repair.', 'hpsb-11f-fg'),
(20, 'K11941803', 5, '2023-04-11', 'The fitness gym is excellent, with a wide range of state-of-the-art equipment, helpful staff, and a clean and spacious environment.', 'hpsb-11f-fg'),
(21, 'A12137227', 4, '2023-02-12', 'The fitness gym has a decent selection of equipment and classes, but the locker room could be cleaner and the parking can be limited.', 'hpsb-11f-fg'),
(22, 'A12137244', 4, '2023-02-18', 'The sauna is a relaxing and enjoyable experience, with clean facilities and a peaceful atmosphere, but it can get quite hot and stuffy inside.', 'hpsb-11f-s'),
(23, 'A12137256', 5, '2023-03-04', 'The sauna is fantastic, with a variety of heat options, a comfortable seating area, and friendly staff to assist with towels and water.', 'hpsb-11f-s'),
(24, 'K11935433', 4, '2023-04-02', 'The sauna is a great way to unwind after a workout, but the hours can be limited and there is often a wait for the most popular times.', 'hpsb-11f-s'),
(25, 'K11935456', 5, '2023-03-16', 'Great space for studying and getting work done, highly recommend.', 'ab1-3f-sh'),
(26, 'K11937297', 4, '2023-02-26', 'The study hall was clean, quiet, and provided a productive atmosphere for students.', 'ab1-3f-sh'),
(27, 'K11937320', 4, '2023-04-11', 'The study hall had plenty of resources and helpful staff to support academic success.', 'ab1-3f-sh'),
(28, 'K11938967', 5, '2023-02-13', 'The social space was a great place to hang out with friends, relax, and take a break from studying.', 's-1f-ss'),
(29, 'K11940758', 4, '2023-04-09', 'The social space was spacious and comfortable, with plenty of seating and natural lighting. ', 's-1f-ss'),
(30, 'A12137227', 4, '2023-02-28', 'The social space provided a welcoming and inclusive environment for students to socialize and engage with the campus community.', 's-1f-ss'),
(31, 'K11941803', 5, '2023-02-20', 'The food booths offered a wide variety of delicious and affordable food options that catered to different tastes and preferences.', 's-2f-fb'),
(32, 'A12137244', 5, '2023-03-24', 'The food booths were conveniently located and provided a quick and easy dining option for students on the go', 's-2f-fb'),
(33, 'A12137256', 5, '2023-04-02', 'The food booths were always well-stocked and the staff were friendly and efficient.', 's-2f-fb'),
(34, 'K11935433', 4, '2023-04-14', 'The UMak oval was a great place for students to exercise, with plenty of space for running, walking, and other outdoor activities.', 's-2f-uo'),
(35, 'K11935456', 4, '2023-02-07', 'The UMak oval was well-maintained and provided a safe and clean environment for students to stay active and healthy.', 's-2f-uo'),
(36, 'K11937297', 4, '2023-03-12', 'The UMak oval was easily accessible and provided a great alternative to indoor exercise facilities.', 's-2f-uo'),
(37, 'A12137227', 3, '2023-02-14', 'The furniture in the student lounge is worn and the lighting is dim, but it\'s a decent spot to take a break.', 'ab1-2f-sl2'),
(38, 'A12137244', 5, '2023-03-22', 'The student lounge is a fantastic place to relax.', 'ab1-2f-sl2'),
(39, 'A12137256', 4, '2023-02-06', 'The student lounge is a comfortable and spacious place to hang out, though it can get noisy at times.', 'ab1-2f-sl2'),
(40, 'K11941803', 4, '2023-02-17', 'The canteen has a decent selection of food and drinks, with reasonable prices, but the seating area can get crowded during peak hours.', 'ab-1f-c'),
(41, 'A12137227', 5, '2023-03-28', 'The canteen is great, with a wide range of delicious and healthy food options, plenty of seating, and friendly staff.', 'ab-1f-c'),
(42, 'A12137244', 4, '2023-04-05', 'The canteen has tasty food and a relaxed atmosphere, but the prices can be a bit high for some items.', 'ab-1f-c'),
(43, 'K11937320', 5, '2023-02-09', 'The food stall is excellent, with a diverse menu of tasty and fresh dishes, friendly staff, and quick service.', 'hpsb-1f-fs'),
(44, 'K11938967', 4, '2023-03-25', 'The food stall has some great options and reasonable prices, but the seating area is limited and can get crowded.', 'hpsb-1f-fs'),
(45, 'K11940758', 3, '2023-03-07', 'The fitness gym has a good selection of equipment and classes, but it can get quite crowded during peak hours and some of the machines are in need of repair.', 'hpsb-1f-fs'),
(46, 'K11937320', 5, '2023-02-09', 'The food stall is excellent, with a diverse menu of tasty and fresh dishes, friendly staff, and quick service.', 'hpsb-1f-fs2'),
(47, 'K11938967', 4, '2023-03-25', 'The food stall has some great options and reasonable prices, but the seating area is limited and can get crowded.', 'hpsb-1f-fs2'),
(48, 'K11940758', 3, '2023-03-07', 'The fitness gym has a good selection of equipment and classes, but it can get quite crowded during peak hours and some of the machines are in need of repair.', 'hpsb-1f-fs2'),
(49, 'K11941803', 4, '2023-02-17', 'The canteen has a decent selection of food and drinks, with reasonable prices, but the seating area can get crowded during peak hours.', 'hpsb-11f-c'),
(50, 'A12137227', 5, '2023-03-28', 'The canteen is great, with a wide range of delicious and healthy food options, plenty of seating, and friendly staff.', 'hpsb-11f-c'),
(51, 'A12137244', 4, '2023-04-05', 'The canteen has tasty food and a relaxed atmosphere, but the prices can be a bit high for some items.', 'hpsb-11f-c'),
(52, 'K11940758', 3, '2023-03-07', 'The fitness gym has a good selection of equipment and classes, but it can get quite crowded during peak hours and some of the machines are in need of repair.', 'hpsb-11f-fg2'),
(53, 'K11941803', 5, '2023-04-11', 'The fitness gym is excellent, with a wide range of state-of-the-art equipment, helpful staff, and a clean and spacious environment.', 'hpsb-11f-fg2'),
(54, 'A12137227', 4, '2023-02-12', 'The fitness gym has a decent selection of equipment and classes, but the locker room could be cleaner and the parking can be limited.', 'hpsb-11f-fg2'),
(55, 'K11935433', 4, '2023-04-03', 'The library is a great resource with an extensive selection of materials, but it can get busy during peak hours.', 'hpsb-5f-l'),
(56, 'K11935456', 3, '2023-03-10', 'While the library has a decent selection of books and study spaces, some areas may be crowded during busy times.', 'hpsb-5f-l'),
(57, 'K11937297', 5, '2023-03-17', 'The library is an excellent resource with helpful staff, plenty of computers and study spaces, and frequent events and workshops.', 'hpsb-5f-l'),
(61, 'K11938967', 5, '2023-02-13', 'The social space was a great place to hang out with friends, relax, and take a break from studying.', 's-1f-ss2'),
(62, 'K11940758', 4, '2023-04-09', 'The social space was spacious and comfortable, with plenty of seating and natural lighting. ', 's-1f-ss2'),
(63, 'A12137227', 4, '2023-02-28', 'The social space provided a welcoming and inclusive environment for students to socialize and engage with the campus community.', 's-1f-ss2'),
(64, 'K11941803', 5, '2023-02-20', 'The food booths offered a wide variety of delicious and affordable food options that catered to different tastes and preferences.', 's-2f-fb2'),
(65, 'A12137244', 5, '2023-03-24', 'The food booths were conveniently located and provided a quick and easy dining option for students on the go', 's-2f-fb2'),
(66, 'A12137256', 5, '2023-04-02', 'The food booths were always well-stocked and the staff were friendly and efficient.', 's-2f-fb2'),
(67, 'K11941803', 5, '2023-02-20', 'The food booths offered a wide variety of delicious and affordable food options that catered to different tastes and preferences.', 's-2f-fb3'),
(68, 'A12137244', 5, '2023-03-24', 'The food booths were conveniently located and provided a quick and easy dining option for students on the go', 's-2f-fb3'),
(69, 'A12137256', 5, '2023-04-02', 'The food booths were always well-stocked and the staff were friendly and efficient.', 's-2f-fb3'),
(73, 'K11935433', 4, '2023-04-14', 'The UMak oval was a great place for students to exercise, with plenty of space for running, walking, and other outdoor activities.', 's-2f-uo2'),
(74, 'K11935456', 4, '2023-02-07', 'The UMak oval was well-maintained and provided a safe and clean environment for students to stay active and healthy.', 's-2f-uo2'),
(75, 'K11937297', 4, '2023-03-12', 'The UMak oval was easily accessible and provided a great alternative to indoor exercise facilities.', 's-2f-uo2');

-- --------------------------------------------------------

--
-- Table structure for table `safety_update`
--

CREATE TABLE `safety_update` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `safety_update`
--

INSERT INTO `safety_update` (`id`, `title`, `description`, `icon`) VALUES
(1, 'EMERGENCY ALERT', 'Fire drill scheduled on Wednesday, March 23 at 10:00 AM. All students and faculty advised to<br/>participate and follow proper evacuation procedures.', 'media/icons/emergencyIcon.png'),
(2, 'HEALTH ADVISORY', 'Increase in reported cases of flu-like symptoms on campus, students advised to take necessary<br/> precautions such as washing hands frequently and wearing face masks', 'media/icons/healthIcon.png'),
(3, 'COVID-19 UPDATE', 'No reported cases of COVID-19 on campus today. Remember to follow health protocols such as wearing masks,<br/>social distancing, and hand washing to prevent the virus. Seek medical attention if you feel unwell. Stay safe.', 'media/icons/covidIcon.png');

-- --------------------------------------------------------

--
-- Table structure for table `saveddb`
--

CREATE TABLE `saveddb` (
  `SavedPostID` int(10) NOT NULL,
  `SavedPostBy` int(10) NOT NULL,
  `SavedPost` int(10) NOT NULL,
  `SavedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umakversenf`
--

CREATE TABLE `umakversenf` (
  `PostID` int(10) NOT NULL,
  `PostAuthor` int(10) NOT NULL,
  `PostDesc` varchar(255) NOT NULL,
  `PostImg` varchar(255) NOT NULL,
  `PostCreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umakversenf`
--

INSERT INTO `umakversenf` (`PostID`, `PostAuthor`, `PostDesc`, `PostImg`, `PostCreatedDate`) VALUES
(1, 2, 'UMAK Women\'s Volleyball Team is the 53rd Women\'s National Collegiate Athletic Association Champion after subduing San Beda College Alabang in game 2 of the best of three series!!!! Congratulations Great Brave Herons 💛💙', 'umkPost1.png', '2023-05-01 10:08:56'),
(2, 3, 'Heads up, Herons and Lady Herons! Gather your teammates, lace up your sneakers, and get ready for the ultimate competition. Registration is NOW OPEN for the highly-anticipated Herons Street Games 2023. This year\'s event is open to all, regardless of skill', 'umakuscPost1.png', '2023-05-01 10:08:56'),
(3, 5, 'II-ACSAD my gang 😎🙌💗<br/>#hpsb #ccis', 'image102.png', '2023-05-01 10:12:42'),
(4, 1, 'Attending Heron’s Night! Awesome!', 'image170.png', '2023-05-01 18:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
('A12137227', 'John Lemuell Bacolod', 'jbacolod.a12137227@umak.edu.ph', 'bacolod'),
('A12137244', 'Airich Diawan', 'adiawan.a12137244@umak.edu.ph', 'diawan'),
('A12137256', 'Isaaq Gavieres', 'igavieres.a12137256@umak.edu.ph', 'gavieres'),
('admin', 'UMak Administrator', 'admin@umak.edu.ph', 'admin'),
('K11935433', 'Denzil Soliven', 'dsoliven.k11935433@umak.edu.ph', 'soliven'),
('K11935456', 'Mark Yuson', 'myuson.k11935456@umak.edu.ph', 'yuson'),
('K11937297', 'Jhonemichael Martinez', 'jmartinez.K11937297@umak.edu.ph', 'martinez'),
('K11937320', 'Julina Kay Gacura', 'jgacura.k11937320@umak.edu.ph', 'gacura'),
('K11938967', 'Jericho Gumahin', 'jgumahin.k11938967@umak.edu.ph', 'gumahin'),
('K11940758', 'Edgar Palen Jr.', 'epalen.k11940758@umak.edu.ph', 'palen'),
('K11941803', 'Rechel Ann De Guzman', 'rdeguzman.k11941803@umak.edu.ph', 'deguzman');

-- --------------------------------------------------------

--
-- Table structure for table `userstb`
--

CREATE TABLE `userstb` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Bday` date NOT NULL,
  `UserPFP` varchar(255) NOT NULL,
  `userType` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UpdatedDate` datetime NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstb`
--

INSERT INTO `userstb` (`UserID`, `Name`, `Email`, `Password`, `Bday`, `UserPFP`, `userType`, `Status`, `UpdatedDate`, `CreatedDate`) VALUES
(1, 'Airich Jay Diawan', 'aj@gmail.com', '123123', '2003-04-23', 'pfp1.png', 'REGULAR', 'ACTIVE', '2023-04-25 18:30:49', '2023-04-25 18:30:49'),
(2, 'University of Makati', 'umak@gmail.com', 'umak123', '2023-04-30', 'IMG_14704.png', 'REGULAR', 'ACTIVE', '2023-04-30 05:18:16', '2023-04-30 05:18:16'),
(3, 'UMAK University Student Council', 'usc@gmail.com', 'usc123123', '2023-04-30', 'image171.png', 'REGULAR', 'ACTIVE', '2023-04-30 05:18:16', '2023-04-30 05:18:16'),
(4, 'Edgar Palen Jr.', 'ej@gmail.com', 'edgar123123', '2002-12-20', '', 'REGULAR', 'ACTIVE', '2023-05-01 10:04:21', '2023-05-01 10:04:21'),
(5, 'John Lemuel Bacolod', 'bacs@gmail.com', 'bacs123123', '2023-05-01', 'image174.png', 'REGULAR', 'ACTIVE', '2023-05-01 05:18:16', '2023-05-01 10:04:21'),
(23, 'admin', 'admin@gmail.com', 'admin', '2023-05-02', 'hello', 'ADMIN', 'ACTIVE', '2023-05-02 05:44:10', '2023-05-02 05:44:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explore_organization`
--
ALTER TABLE `explore_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explore_trending`
--
ALTER TABLE `explore_trending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floor_id` (`floor_id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `followtable`
--
ALTER TABLE `followtable`
  ADD PRIMARY KEY (`FollowID`),
  ADD KEY `Follower` (`FollowerID`),
  ADD KEY `Following` (`FollowingID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FacilityId` (`FacilityId`);

--
-- Indexes for table `hangouts`
--
ALTER TABLE `hangouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floor_id` (`floor_id`);

--
-- Indexes for table `hangouts_gallery`
--
ALTER TABLE `hangouts_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `HangoutsId` (`HangoutsId`);

--
-- Indexes for table `nearestarea`
--
ALTER TABLE `nearestarea`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FacilityId` (`FacilityId`);

--
-- Indexes for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `LikedBy` (`WhoLikedID`),
  ADD KEY `LikedPost` (`PostLikedID`);

--
-- Indexes for table `recent_incidents`
--
ALTER TABLE `recent_incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_emergencies`
--
ALTER TABLE `report_emergencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_incidents`
--
ALTER TABLE `report_incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_hangouts`
--
ALTER TABLE `review_hangouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_review_hangouts_user_id` (`user_id`),
  ADD KEY `fk_review_hangouts_hangouts_id` (`hangouts_id`);

--
-- Indexes for table `safety_update`
--
ALTER TABLE `safety_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saveddb`
--
ALTER TABLE `saveddb`
  ADD PRIMARY KEY (`SavedPostID`),
  ADD KEY `SavedBy` (`SavedPostBy`),
  ADD KEY `SavedPost` (`SavedPost`);

--
-- Indexes for table `umakversenf`
--
ALTER TABLE `umakversenf`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `PostAuthor` (`PostAuthor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstb`
--
ALTER TABLE `userstb`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `explore_organization`
--
ALTER TABLE `explore_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `explore_trending`
--
ALTER TABLE `explore_trending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `followtable`
--
ALTER TABLE `followtable`
  MODIFY `FollowID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `hangouts_gallery`
--
ALTER TABLE `hangouts_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nearestarea`
--
ALTER TABLE `nearestarea`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `postlikes`
--
ALTER TABLE `postlikes`
  MODIFY `LikeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recent_incidents`
--
ALTER TABLE `recent_incidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_emergencies`
--
ALTER TABLE `report_emergencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `report_incidents`
--
ALTER TABLE `report_incidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `safety_update`
--
ALTER TABLE `safety_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saveddb`
--
ALTER TABLE `saveddb`
  MODIFY `SavedPostID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `umakversenf`
--
ALTER TABLE `umakversenf`
  MODIFY `PostID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userstb`
--
ALTER TABLE `userstb`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facility`
--
ALTER TABLE `facility`
  ADD CONSTRAINT `facility_ibfk_1` FOREIGN KEY (`floor_id`) REFERENCES `floor` (`id`);

--
-- Constraints for table `floor`
--
ALTER TABLE `floor`
  ADD CONSTRAINT `floor_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`id`);

--
-- Constraints for table `followtable`
--
ALTER TABLE `followtable`
  ADD CONSTRAINT `Follower` FOREIGN KEY (`FollowerID`) REFERENCES `userstb` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Following` FOREIGN KEY (`FollowingID`) REFERENCES `userstb` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`FacilityId`) REFERENCES `facility` (`id`);

--
-- Constraints for table `hangouts`
--
ALTER TABLE `hangouts`
  ADD CONSTRAINT `hangouts_ibfk_1` FOREIGN KEY (`floor_id`) REFERENCES `floor` (`id`);

--
-- Constraints for table `hangouts_gallery`
--
ALTER TABLE `hangouts_gallery`
  ADD CONSTRAINT `hangouts_gallery_ibfk_1` FOREIGN KEY (`HangoutsId`) REFERENCES `hangouts` (`id`);

--
-- Constraints for table `nearestarea`
--
ALTER TABLE `nearestarea`
  ADD CONSTRAINT `nearestarea_ibfk_1` FOREIGN KEY (`FacilityId`) REFERENCES `facility` (`id`);

--
-- Constraints for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD CONSTRAINT `LikedBy` FOREIGN KEY (`WhoLikedID`) REFERENCES `userstb` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LikedPost` FOREIGN KEY (`PostLikedID`) REFERENCES `umakversenf` (`PostID`);

--
-- Constraints for table `review_hangouts`
--
ALTER TABLE `review_hangouts`
  ADD CONSTRAINT `fk_review_hangouts_hangouts_id` FOREIGN KEY (`hangouts_id`) REFERENCES `hangouts` (`id`),
  ADD CONSTRAINT `fk_review_hangouts_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `saveddb`
--
ALTER TABLE `saveddb`
  ADD CONSTRAINT `SavedBy` FOREIGN KEY (`SavedPostBy`) REFERENCES `userstb` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SavedPost` FOREIGN KEY (`SavedPost`) REFERENCES `umakversenf` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `umakversenf`
--
ALTER TABLE `umakversenf`
  ADD CONSTRAINT `PostAuthor` FOREIGN KEY (`PostAuthor`) REFERENCES `userstb` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
