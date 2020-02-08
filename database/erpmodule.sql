-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 03:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpmodule`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sap_id` int(11) DEFAULT NULL,
  `title` varchar(201) CHARACTER SET utf8 NOT NULL,
  `authors` varchar(67) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `affiliation` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `category` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `publisher` varchar(127) CHARACTER SET utf8 DEFAULT NULL,
  `month` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `identifier` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `number` varchar(56) CHARACTER SET utf8 DEFAULT NULL,
  `doi` varchar(44) CHARACTER SET utf8 DEFAULT NULL,
  `indexed` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `volume` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `issue` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `page_no` varchar(19) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(144) CHARACTER SET utf8 DEFAULT NULL,
  `verification_document` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `remarks` varchar(9) CHARACTER SET utf8 NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sap_id`, `title`, `authors`, `department`, `affiliation`, `category`, `publisher`, `month`, `year`, `identifier`, `number`, `doi`, `indexed`, `volume`, `issue`, `page_no`, `url`, `verification_document`, `status`, `remarks`) VALUES
(40001714, 'A Hybrid of Round Robin and Shortest Job first CPU Scheduling Algorithm for Minimizing Average', 'Tanuja Jha', 'Informatics', 'UPES Dehradun', 'Conference', 'Second International Conference on Green Computing and Internet of Things (ICGCIoT 2018)', NULL, 2018, 'ISBN', '978-1-5386-5657-0', NULL, 'Scopus', NULL, NULL, NULL, NULL, 'Published 1st Page', 'Accepted', 'Pending'),
(40001735, 'A Multi-layered Outlier Detection Model for Resource Constraint Hierarchical MANET', 'Alok Aggarwal, Divakar Yadav', 'Systemics', 'UPES Dehradun', 'Conference', 'IEEE', 'null', 2018, 'null', 'null', 'null', 'Scopus', '4', 'null', 'null', 'null', 'null', 'Accepted', 'Pending'),
(40000816, 'A New Approach for VM Failure Prediction using Stochastic Model in Cloud', 'Rama Sushil, Amit Agarwal, Afzal Sikander', 'Informatics', 'UPES Dehradun', 'Journal', 'IETE Journal of Research, Taylor and Francis', 'October', 2018, 'ISSN', '0974-780X', '10.1080/03772063.2018.1537814', 'SCI', '65', '1', NULL, 'https://www.tandfonline.com/doi/ref/10.1080/03772063.2018.1537814?scroll=top', 'Published 1st Page', 'Published', 'Completed'),
(40001286, 'A New Framework for Collecting Implicit User Feedback\nfor Movie and Video Recommender System', 'Neha Sharma, Utkarsh Gupta', 'Cybernetics', 'UPES Dehradun', 'Conference', 'International Conference on Emerging Trends in Communication, Computing and Electronics', 'December', 2018, 'ISBN', '978-981-13-2684-4', NULL, 'Scopus', NULL, NULL, NULL, 'https://link.springer.com/chapter/10.1007/978-981-13-2685-1_38', NULL, 'Published', 'Pending'),
(40001735, 'A Novel and Efficient Reader-to-Reader and Tag-to-Tag Anti-Collision Protocol', 'Alok Aggarwal, Krishna Gopal', 'Systemics', 'UPES Dehradun', 'Journal', 'IETE Journal of Research, Taylor and Francis', NULL, 2018, 'ISSN', '0377-2063', '10.1080/03772063.2018.1537815', 'SCI', NULL, NULL, NULL, 'https://www.tandfonline.com/doi/ref/10.1080/03772063.2018.1537815?scroll=top', NULL, 'Published', 'Completed'),
(40001326, 'A Novel Architecture for Learner-Centric Curriculum Sequencing in Adaptive Intelligent Tutoring System', 'Neelu Jyothi Ahuja, Amit Kumar,', 'Systemics', 'UPES Dehradun', 'Journal', 'IGI Global', 'July-Sep', 2018, 'ISSN', '15487717', '10.4018/JCIT.2018070101', 'Scopus', '20', '3', '2018-01-20 00:00:00', 'https://www.igi-global.com/article/a-novel-architecture-for-learner-centric-curriculum-sequencing-in-adaptive-intelligent-tutoring-system/207363', 'Published 1st Page', 'Published', 'Pending'),
(40001308, 'A Quantitative Technique for Evaluating Uncertainities in the Duration of Activities within a Software Project', 'Sanjay Tyagi, Pardeep Kumar', 'Virtualization', 'UPES Dehradun', 'Journal', 'Journal of King Saud University-Computer and Information Sciences (JKSUCI)', 'December', 2018, NULL, NULL, NULL, 'eSCI', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001308, 'A Review on Cloud Simulation Tools for Resource Scheduling', 'Sanjay Tyagi, Pardeep Kumar', 'Virtualization', 'UPES Dehradun', 'Conference', '4th International Conference on Next Generation, Computing, Technologies (NGCT 2018), Springer', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40000016, 'A review on VANET routing protocols and Wireless Standards', ' Ravi Tomar, G.H.Sastry, Manish Prateek', 'Computer Application', 'UPES Dehradun', 'Conference', 'Springer Nature, Singapore', 'January', 2018, 'ISBN', '978-981-10-5547-8', 'https://doi.org/10.1007/978-981-10-5547-8_34', 'Scopus', '78', NULL, 'pp 329-340', 'https://link.springer.com/chapter/10.1007/978-981-10-5547-8_34', NULL, 'Published', 'Completed'),
(40001617, 'A Self-Optimization Based Virtual Machine Scheduling to Workloads in Cloud Computing Environment', 'Amit Agarwal, Venkatadri M, Ashutosh Pasricha', 'Informatics', 'UPES Dehradun', 'Conference', 'International Conference on Engineering, Technology and Management for Sustainable Development (ICETMSD-2018)', 'October', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001272, 'A Survey of Current Aids for Visually Impaired Persons ', 'Monit Kapoor', 'Virtualization', 'UPES Dehradun', 'Conference', '2018 3rd International Conference On Internet of Things: Smart Innovation and Usages (IoT-SIU)', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Published', 'Completed'),
(40001735, 'A Survey on Emerging Cyber Threat Intelligence Platforms', 'Alok Aggarwal, Neelu Jyoti Ahuja, Neeraj Chugh, Himanshu Chaudhary', 'Systemics', 'UPES Dehradun', 'Conference', 'nternational Conference on Startup Ventures: Technology Developments and Future Strategies ', NULL, 2018, NULL, NULL, NULL, 'Other', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001735, 'Action, Decision and Monitoring based Multilayered Outlier Detection Model for Resource Constraint MANET', 'Alok Aggarwal, Neelu Jyoti Ahuja', 'Systemics', 'UPES Dehradun', 'Conference', '4th International Conference on Next Generation, Computing, Technologies (NGCT 2018), Springer', NULL, 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001287, 'Alpha labeling of cyclic graphs - I', 'Ajay Singh, Debdas Mishra and V.K. Srivastava', 'Informatics', 'UPES Dehradun', 'Journal', 'ARS Combinatoria ', 'August', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001684, 'An Approach towards Real Time Smart Vehicular System Using Internet of Things', 'Nitin Arora, Kamal Preet Singh', 'Informatics', 'UPES Dehradun', 'Journal', 'International Journal of Research in Engineering, IT and Social Science', 'October', 2018, 'ISSN', '2250-0588', 'Not Available ', 'UGC Approved', '8', '10', '52-56', 'http://indusedu.org/pdfs/IJREISS/IJREISS_2296_55184.pdf.', NULL, 'Published', 'Pending'),
(40001530, 'An Efficient Algorithm for Detecting and measure the properties of pothole', 'Rohit Ramchandani, Md Shamoon, Ankit Khare, Keshav Kaushik', 'Informatics', 'UPES Dehradun', 'Conference', 'Springer, Singapore', 'September', 2018, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001735, 'An Efficient Outlier Detection Mechanism for RFID-Sensor Integrated MANET', 'Alok Aggarwal', 'Systemics', 'UPES Dehradun', 'Conference', '18th International Conference on Intelligent Systems Design and Applications, Springer', NULL, 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001714, 'An Entire Dynamic Malware Examination with Near Investigation of Conduct Examination Sandboxes', 'Sajal Jain, S K Niranjan Aradhya, Praveen Kumar', 'Informatics', 'UPES Dehradun', 'Conference', ' Second International Conference on Green Computing and Internet of Things (ICGCIoT 2018)', NULL, 2018, 'ISBN', '978-1-5386-5657-0', NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001735, 'An Improved Outlier Detection Mechanism for Hierarchical Key Management in Hierarchical Mobile Ad-hoc Networks (MANETs)', 'Alok Aggarwal, Neelu Jyoti Ahuja, Neeraj Chugh, Himanshu Chaudhary', 'Systemics', 'UPES Dehradun', 'Conference', 'International Conference on Startup Ventures: Technology Developments and Future Strategies , Manipal University, Jaipur, India', NULL, 2018, NULL, NULL, NULL, 'Other', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001287, 'Automation of seat', 'Dr. Manish Prateek', 'Informatics', 'UPES Dehradun', 'Patent', 'Patent Journal No.36/2018', 'August', 2018, NULL, '201811030215A', NULL, 'Other', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001617, 'Autonomic Cloud Resource Management', 'Amit Agarwal, Venkatadri M, Ashutosh Pasricha', 'Informatics', 'UPES Dehradun', 'Conference', 'IEEE Fifth International Conference on Parallel, Distributed and Grid Computing', 'December', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40000453, 'Availability aspects through optimization techniques based outlier detection mechanism in wireless and mobile networks', 'Adarsh Kumar, Alok Aggarwal', 'Systemics', 'UPES Dehradun', 'Journal', 'International Journal of Computer Networks & Communications, AIRCC', NULL, 2018, 'ISSN', '0974-9322', NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40000453, 'AVAILABILITY ASPECTS THROUGH OPTIMIZATION TECHNIQUES BASED OUTLIER DETECTION MECHANISM IN WIRELESS AND MOBILE NETWORKS', 'Adarsh Kumar , Alok Aggarwal', 'Systemics', 'UPES Dehradun', 'Journal', 'International Journal of Computer Networks & Communications (IJCNC)', 'November', 2018, 'ISSN', '0974-9322', NULL, 'Scopus', '10', '6', '77-96', NULL, NULL, 'Published', 'Completed'),
(40000043, 'Characterization of Human Knowledge for Intelligent Tutoring', NULL, 'Systemics', 'UPES Dehradun', 'Conference', 'Springer Verlag', 'February', 2018, 'ISSN', '21945357', '10.1007/978-981-10-6872-0_34', 'Scopus', '563', NULL, '363-373', 'https://link.springer.com/chapter/10.1007%2F978-981-10-6872-0_34', 'Published 1st Page', 'Published', 'Completed'),
(40001617, 'Cloud Based Platform Independent Practical Evaluation Model for Technical University ', 'Anurag Jain, Nitin Arora, Prashant Rawat', 'Informatics', 'UPES Dehradun', 'Journal', 'IJSRCSAMS', 'July ', 2018, 'ISSN', '2319–1953', NULL, 'UGC Approved', '7', '4', '1--3', 'http://www.ijsrcsams.com/images/stories/Past_Issue_Docs/ijsrcsamsv7i4p92.pdf', NULL, 'Published', 'Published'),
(40001735, 'Comparative Analysis of Elliptic Curve Cryptography based Lightweight Authentication Protocols for RFID-Sensor Integrated MANETs ', 'Alok Aggarwal', 'Systemics', 'UPES Dehradun', 'Conference', '18th International Conference on Intelligent Systems Design and Applications', NULL, 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Pending'),
(40001460, 'Comparison of Fault Tolerance Amid Various Irregular MINs', ' Piyush Chauhan, Ankit Khare, Alok Jhaldiyal, Nitin', 'Cybernetics', 'UPES Dehradun', 'Conference', '5th International Springer', 'June', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001533, 'Critical Success Factors and Critical Barriers for Application of Information Technology to Knowledge Management/ Experience Management for Software Process Improvement – Findings from literary studies', 'Nitin Chanderwal', 'Computer Application', 'UPES Dehradun', 'Conference', '3rd International Conference on Next Generation Computing Technologies (NGCT 2017)', 'June', 2018, 'ISSN', '1865-0929', NULL, 'Scopus', '827', NULL, '310-322', 'https://link.springer.com/chapter/10.1007/978-981-10-8657-1_24', 'Published 1st Page', 'Published', 'Completed'),
(40001237, 'Deep Learning Based Brain MRI Segmentation Algorithms', 'Dr. Piyush Chauhan, Dr. Durgansh Sharma', 'Systemics', 'UPES Dehradun', 'Conference', '4th International Conference on Next Generation, Computing, Technologies (NGCT 2018), Springer', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001617, 'Energy-Aware Autonomic Resource Scheduling Framework for Cloud', 'Amit Agarwal, Venkatadri M, Ashutosh Pasricha', 'Informatics', 'UPES Dehradun', 'Journal', 'International Journal of Mathematical, Engineering and Management Sciences ', 'November', 2018, 'ISSN', '2455-7749', '10.33889/IJMEMS.2019.4.1-004', 'Scopus', '4', '1', '45-54', 'http://www.ijmems.in/assets/4-ijmems-18-234-vol.-4%2c-no.-1%2c-41%e2%80%9355%2c-2019.pdf', NULL, 'Published', 'Completed'),
(40001308, 'Energy-aware Virtual Machine Selection and Allocation Strategies in Cloud Data Centers', 'Sanjay Tyagi, Pardeep Kumar', 'Virtualization', 'UPES Dehradun', 'Conference', '5th International Conference on Parallel, Distributed and Grid Computing (PDGC 2018), Springer', 'December', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001517, 'Enhanced Secure Transmission of data in WBAN with predictive model for health care applications', 'Anurag Singh Tomar, Sandip K Chaurasiya', 'Systemics', 'UPES Dehradun', 'Journal', 'IDT', 'July', 2018, 'ISSN', '1875-8843_x000D_\n', 'Under publication', 'Scopus', 'Pending', 'Pending', 'Pending', 'Pending', NULL, 'Accepted', 'Pending'),
(40001616, 'Evolution of Computing-Mainframe to Cloud: A Systematic Study', 'Bhupesh Kumar Dewangan, Nitin Arora, Prashant Rawat, Rajneesh Kumar', 'Virtualization', 'UPES Dehradun', 'Journal', 'IJSRCSAMS Publication', 'July ', 2018, 'ISSN', '2319–1953', NULL, 'UGC Approved', '7', '4', NULL, 'http://www.ijsrcsams.com/images/stories/Past_Issue_Docs/ijsrcsamsv7i4p143.pdf', NULL, 'Published', 'Completed'),
(40001713, 'Exploration in Adaptiveness to Achieve Automated Fault Recovery in Self-healing Software Systems: A Review', 'Geeta Sikka', 'Cybernetics', 'UPES Dehradun', 'Journal', 'IOS Press', 'December', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001530, 'Handwritten Bengali Numeral Recognition using HOG Based Feature Extraction Algorithm', 'Hukam Singh Rana and Tanmay Bhowmik', 'Informatics', 'UPES Dehradun', 'Conference', 'IEEE', 'February', 2018, '2018', NULL, '10.1109/SPIN.2018.8474215', 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Published', 'Completed'),
(40001308, 'High Availability and and Accessibility of Services in Cloud Environment', 'Sanjay Tyagi, Pardeep Kumar', 'Virtualization', 'UPES Dehradun', 'Conference', '4th International Conference on Computing Sciences (Feynman 100)', 'August', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001623, 'Image Steganalysis of Improvised Algorithms Based on Pixel Difference Pattern and Random Embedding', 'Bhupesh Kumar Dewangan, Anurag Jain, Nitin Arora', 'Systemics', 'UPES Dehradun', 'Journal', 'PRAMANA Research Journal', 'September', 2018, 'ISSN', '2249-2976\n', '16.10089.PRJ.2018.V8I8.18.2035', 'UGC Approved', '8', '9', '147-163', 'https://www.pramanaresearch.org/gallery/prj-p252.pdf_x000D_\n', NULL, 'Published', 'Pending'),
(40001189, 'IMPLEMENTATION OF AURA COLORSPACE VISUALIZER TO DETECT HUMAN BIOFIELD USING IMAGE PROCESSING TECHNIQUE', 'Ajay Prasad, Venkatadri Marriboyina', 'Systemics', 'UPES Dehradun', 'Journal', 'Journal of Engg. Sci and Technology', 'November', 2018, 'ISSN', '1823-4690', NULL, 'Scopus', '14', '2', NULL, 'http://jestec.taylors.edu.my/', NULL, 'Accepted', 'Completed'),
(40001714, 'Implementation of Common Spatial Pattern Algorithm using EEG in BCILAB', 'Bhawna Arora', 'Informatics', 'UPES Dehradun', 'Conference', 'Springer, Singapore', 'October', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001517, 'Improved Message Recovery Based Authentication Mechanism for Internet of Things Applications System', 'Durgansh Sharma and Neeraj Chugh', 'Systemics', 'UPES Dehradun', 'Journal', 'IJSRCSAMS', 'November', 2018, 'ISSN', '2319-1953', 'Under publication', 'UGC Approved', 'Pending', 'Pending', 'Pending', 'Pending', NULL, 'Accepted', 'Pending'),
(40001286, 'Introduction to SDN and NFV', 'Misha Hungyo', 'Cybernetics', 'UPES Dehradun', 'Book Chapter', 'IGI Global', NULL, 2018, 'ISBN', '978-1-5225-3640-6', '10.4018/978-1-5225-3460.ch001', 'Scopus', NULL, NULL, NULL, 'https://www.igi-global.com/chapter/introduction-to-sdn-and-nfv/198191', NULL, 'Published', 'Pending'),
(40001287, 'Key detection system ', NULL, 'Informatics', 'UPES Dehradun', 'Patent', 'Patent Journal No.28/2018\n', 'July', 2018, NULL, '201811021240A', NULL, 'Other', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001287, 'Learner Characteristics Based Learning Style Models Classifications and its Implications on Teaching', 'Neelu Jyothi Ahuja, Ninni Singh', 'Systemics', 'UPES Dehradun', 'Jounral', 'Academic Publicationa', 'March', 2018, 'ISSN', '1311-8080', NULL, 'Scopus', '118', '20A', '175-184', 'http://www.acadpubl.eu/hub/2018-118-20/articles/20a/24.pdf', 'Published 1st Page', 'Published', 'Completed'),
(40001198, 'Location and Energy Based Hierarchical_x000D_\nDynamic Key Management Protocol_x000D_\nfor Wireless Sensor Networks', ' J. Dhiviya Rose', 'Computer Application', 'UPES Dehradun', 'Conference', 'Springer Nature Singapore ', 'March', 2018, 'ISSN', '1865-0937', 'https://doi.org/10.1007/978-981-10-8660-1_15', 'Scopus', NULL, NULL, '198–211', 'http://www.springer.com/series/7899', 'Published 1st Page', 'Published', 'Completed'),
(40001287, 'LPG detection ', NULL, 'Informatics', 'UPES Dehradun', 'Patent', 'Patent Journal No.43/2018', 'October', 2018, NULL, '201811038948A', NULL, 'Other', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001310, 'Mobility Management in Constrained Wireless Nodes: A Review', 'Dr. Amit Aggarwal2, and Dr. Kamal Kumar3', 'Cybernetics', 'UPES Dehradun', 'Conference', 'International Conference on Engineering, Technology and Management for Sustainable Development (ICETMSD-2018)', 'October', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, 'Acceptance', 'Accepted', 'Completed'),
(40001735, 'Multidimensional-Multilayer Outlier Detection Mechanism for RFID-Sensor Integrated MANET Convergent to Internet of Things', 'Neeraj Chugh, Alok Aggarwal, Neelu Jyoti Ahuja', 'Systemics', 'UPES Dehradun', 'Conference', '4th International Conference on Next Generation Computing Technologies (NGCT 2018', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001189, 'Novice Methodology For Detecting The Presence Of Bio-Field', 'Dr. Ajay Prasad, Dr. Venkatadari', 'Systemics', 'UPES Dehradun', 'Journal', 'International Journal of Pure and Applied Mathematics', 'March', 2018, 'ISSN', '1311-8080 (printed version), 1314-3395 (on-line version)', NULL, 'Scopus', '118', '20', '149-154', 'http://www.ijpam.eu', NULL, 'Published', 'Pending'),
(40001287, 'Object identification', NULL, 'Informatics', 'UPES Dehradun', 'Patent', 'Patent Journal No.43/2018', 'October', 2018, NULL, '201811039471A', NULL, 'Other', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001460, 'On Analysis and Discussions of Various Performance Parameters of Omega and Advance Omega Interconnection Network', ' Piyush Chauhan, Nitin', 'Cybernetics', 'UPES Dehradun', 'Conference', '4th International IEEE', 'December', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001308, 'Operating System Structures', 'Sanjay Tyagi', 'Virtualization', 'UPES Dehradun', 'Book', 'Directorate of Distance Education, Kurukshetra University, Kurukshetra ', 'August', 2018, NULL, NULL, NULL, 'Other', NULL, NULL, NULL, NULL, NULL, 'Published', 'Completed'),
(40001275, 'Optimized Solution for Employee Transportation Problem using Linear Programming', 'Himanshu Sahu', 'Cybernetics', 'UPES Dehradun', 'Conference', 'Second International Conference on Smart Innovations in Communications and Computational Sciences', 'November', 2018, 'ISBN', '978-981-13-2413-0', '10.1007/978-981-13-2414-7_24', 'Other', NULL, NULL, NULL, 'https://link.springer.com/chapter/10.1007/978-981-13-2414-7_24', NULL, 'Published', 'Pending'),
(40001825, 'Panel Data- Representation and Learning', 'Bonoshree Saikia', 'Informatics', 'UPES Dehradun', 'Book Chapter', 'Springer Verlag', NULL, 2018, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001714, 'Real Time recognition of malignant skin lesions using ensemble modeling', 'Vikas Kumar', 'Informatics', 'UPES Dehradun', 'Journal', 'Journal of Scientific and Industrial Research', 'October', 2018, 'ISSN', ' 0975-1084 (Online); 0022-4456 (Print)', 'In process', 'SCI', '78', NULL, '148-153', 'http://nopr.niscair.res.in/handle/123456789/45947', NULL, 'Published', 'Published'),
(40001617, 'Resource Scheduling in Cloud: A Comparative Study', 'Amit Agarwal, Venkatadri M, Ashutosh Pasricha', 'Informatics', 'UPES Dehradun', 'Journal', 'IJCSE', 'August', 2018, 'ISSN', '2347-2693', 'https://doi.org/10.26438/ijcse/v6i8.168173', 'UGC Approved', '6', '8', '168-173', 'http://www.ijcseonline.org/pdf_paper_view.php?paper_id=2672&28-IJCSE-04503.pdf_x000D_\n', NULL, 'Published', 'Pending'),
(40001310, 'Rising Security Perils and Its Counter Steps In Internet of Things', 'Gaurav Mishra, Diwakar Kumar, Abhinav Kumar Singh', 'Cybernetics', 'UPES Dehradun', 'Conference', '4th International Conference on Applied and Theoretical Computing and Communication Technology (iCATccT - 2018)', 'September', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, 'Acceptance', 'Accepted', 'Completed'),
(40001308, 'Scheduling in Cloud Computing Environment using Meta-Heuristic Techniques A Survey', 'Sanjay Tyagi, Pardeep Kumar', 'Virtualization', 'UPES Dehradun', 'Conference', '1st International Conference on Emerging Technology in Modeling and Graphics  (IEM Graph 2018), Springer', 'September', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001557, 'Security and Privacy in IoT based E-Business and Retail', 'Dr. Susheela Dahiya', 'Systemics', 'UPES Dehradun', 'Conference', 'IEEE Xplore', 'November', 2018, 'ISBN', '978-1-5386-63-68-4', NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001825, 'Selection Of Mobile Node Using Game And Graph Theory For Video Streaming Application', NULL, 'Informatics', 'UPES Dehradun', 'Conference', '4th International Conference on Next Generation Computing Technologies', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001617, 'SLA-Aware Autonomic Resource Management based on Time and Cost in Cloud', 'Amit Agarwal, Venkatadri M, Ashutosh Pasricha', 'Informatics', 'UPES Dehradun', 'Conference', '4th International Conference on NGCT 2018', 'November', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, NULL, NULL, 'Completed'),
(40001310, 'SMART SYSTEMS SECURITY: DETAILED ANALYSIS', 'Kunwar Uday Singh, Anchal Maheshwari, Bhavya', 'Cybernetics', 'UPES Dehradun', 'Conference', 'The international Conference on Computational Intelligence and Data Analytics (ICCIDA-2018)', 'October', 2018, NULL, NULL, NULL, 'Scopus', NULL, NULL, NULL, NULL, 'Acceptance', 'Accepted', 'Pending'),
(40001286, 'Software-Defined Storage', 'Ninni Singh', 'Cybernetics', 'UPES Dehradun', 'Book Chapter', 'IGI Global', NULL, 2018, 'ISBN', '978-1-5225-3640-6', '10.4018/978-1-5225-3460.ch013', 'Scopus', NULL, NULL, NULL, 'https://www.igi-global.com/chapter/software-defined-storage/198203', NULL, 'Published', 'Pending'),
(40001713, 'Something', 'null', 'Informatics', 'null', 'Journal', 'null', 'Feb', 2020, 'ISSN', 'null', 'null', 'SCI', 'null', 'null', 'null', 'null', 'Certificate', 'Submitted', 'Pending'),
(40001713, 'Something2', 'null', 'Informatics', 'null', 'Journal', 'null', 'Feb', 2020, 'ISSN', 'null', 'null', 'SCI', 'null', 'null', 'null', 'null', 'Certificate', 'Submitted', 'Pending'),
(40001524, 'Study of various aproches for VM placement optimization in Data Centers', 'Jyotsna Sengupta, PK Suri', 'Cybernetics', 'Research Scholar, Punjabi University, Patiala', 'Journal', 'International Journal of  Scientific Research in Computer Science Applications and Management Studies', 'November', 2018, 'ISSN', '2319-1953', NULL, 'UGC Approved', '7', '6', NULL, NULL, NULL, 'Accepted', 'Completed'),
(40001530, 'The Components Of Big Data And Knowledge Management Will Change Radically How People Collaborate And Develop Complex Research', 'Ambika Aggarwal, Kalpana Rangra, Ashutosh Bhatt', 'Informatics', 'UPES Dehradun', 'Book Chapter', 'IGI Global', 'November', 2018, NULL, 'EISBN13: 9781522570783', 'DOI: 10.4018/978-1-5225-7077-6.', 'Scopus', NULL, NULL, NULL, NULL, NULL, 'Published', 'Pending'),
(40001511, 'Traffic Management using Logistic Regression with Fuzzy Logic', 'Mridula Singh, Girish Sharma, K.V. Arya', 'Systemics', 'UPES Dehradun', 'Conference', 'Elsevier', NULL, 2018, NULL, NULL, '10.1016/j.procs.2018.05.159', 'Scopus', '132', NULL, '45-460', 'https://www.sciencedirect.com/science/article/pii/S1877050918308937', 'Published 1st Page', 'Published', 'Pending'),
(40001713, 'Try', 'null', 'Informatics', 'null', 'Journal', 'null', 'Feb', 2020, 'ISSN', 'null', 'null', 'SCI', NULL, NULL, 'null', 'null', 'Certificate', 'Submitted', 'Pending'),
(40001713, 'try last', 'null', 'Informatics', 'null', 'Journal', 'null', 'Feb', 2020, 'ISSN', 'null', 'null', 'SCI', NULL, NULL, 'null', 'null', 'Certificate', 'Submitted', 'Pending'),
(40001310, 'User Choice-Based Secure Password Generator using Python', 'Nitin Arora, Ahatsham', 'Cybernetics', 'UPES Dehradun', 'Journal', 'International Journal of Research in Engineering, IT and Social Science', 'August', 2018, 'ISSN', '2250-0588', 'Not Available ', 'UGC Approved', '8', '8', '149-154', 'http://www.indusedu.org/pdfs/IJREISS/IJREISS_2261_22923.pdf', NULL, 'Published', 'Pending'),
(40001272, 'WALKING AID FOR UNEVEN SURFACE DETECTION AND OBSTACLE AVOIDANCE FOR VISUALLY IMPAIRED PERSON ', 'Monit Kapoor', 'Virtualization', 'UPES Dehradun', 'Patent', 'OFFICIAL JOURNAL OF THE PATENT OFFICE ', 'October', 2018, NULL, '201811038118', NULL, 'Other', '2018', '43', '40416', 'http://www.ipindia.nic.in/writereaddata/Portal/IPOJournal/1_2674_1/Part-1.pdf', NULL, 'Published', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sap_id` int(11) NOT NULL,
  `password` int(11) DEFAULT NULL,
  `name` varchar(28) CHARACTER SET utf8 DEFAULT NULL,
  `designation` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `department` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `school` varchar(4) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sap_id`, `password`, `name`, `designation`, `department`, `school`) VALUES
(40000016, 40000016, 'GAGAN DEEP SINGH', 'Faculty', 'Computer Application', 'SOCS'),
(40000043, 40000043, 'NEELU JYOTI AHUJA', 'HOD', 'Systemics', 'SOCS'),
(40000095, 40000095, 'INDER SINGH', 'Faculty', 'Computer Application', 'SOCS'),
(40000118, 40000118, 'VINAY AVASTHI', 'Faculty', 'Computer Application', 'SOCS'),
(40000453, 40000453, 'NEERAJ CHUGH', 'Faculty', 'Systemics', 'SOCS'),
(40000627, 40000627, 'MANISH PRATEEK', 'Dean', '', 'SOCS'),
(40000628, 40000628, 'VISHAL KAUSHIK', 'Faculty', 'Systemics', 'SOCS'),
(40000667, 40000667, 'PRAKASH GL', 'Faculty', 'Virtualization', 'SOCS'),
(40000730, 40000730, 'HANUMAT SASTRY G', 'Faculty', 'Systemics', 'SOCS'),
(40000816, 40000816, 'AJAY RAWAT', 'Faculty', 'Informatics', 'SOCS'),
(40000843, 40000843, 'MONIT KAPOOR', 'HOD', 'Cybernetics', 'SOCS'),
(40000920, 40000920, 'SUNIL KUMAR', 'Faculty', 'Cybernetics', 'SOCS'),
(40000943, 40000943, 'ANIL KUMAR', 'Faculty', 'Informatics', 'SOCS'),
(40000950, 40000950, 'HITESH KUMAR SHARMA', 'Faculty', 'Cybernetics', 'SOCS'),
(40000987, 40000987, 'RAJEEV TIWARI', 'Faculty', 'Virtualization', 'SOCS'),
(40000993, 40000993, 'HUKAM SINGH RANA', 'Faculty', 'Informatics', 'SOCS'),
(40001054, 40001054, 'POONAM KAINTHURA', 'Faculty', 'Informatics', 'SOCS'),
(40001058, 40001058, 'JAGDISH CHANDRA PATNI', 'Faculty', 'Virtualization', 'SOCS'),
(40001059, 40001059, 'RAVI TOMAR', 'Faculty', 'Informatics', 'SOCS'),
(40001062, 40001062, 'RAVI PRAKASH', 'Faculty', 'Informatics', 'SOCS'),
(40001082, 40001082, 'PREMKUMAR CHITHARULU', 'Faculty', 'Systemics', 'SOCS'),
(40001084, 40001084, 'P SRIKANTH', 'Faculty', 'Systemics', 'SOCS'),
(40001097, 40001097, 'PANKAJ BADONI', 'Faculty', 'Virtualization', 'SOCS'),
(40001100, 40001100, 'ANKIT KHARE', 'Faculty', 'Cybernetics', 'SOCS'),
(40001107, 40001107, 'ANKIT VISHNOI', 'Faculty', 'Systemics', 'SOCS'),
(40001112, 40001112, 'AJAY PRASAD', 'HOD', 'Computer Application', 'SOCS'),
(40001116, 40001116, 'BHAGWANT SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001134, 40001134, 'KINGSHUK SRIVASTAVA', 'Faculty', 'Informatics', 'SOCS'),
(40001160, 40001160, 'AMIT AGARWAL', 'Faculty', 'Virtualization', 'SOCS'),
(40001179, 40001179, 'NIHARIKA SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001189, 40001189, 'GUNJAN CHHABRA', 'Faculty', 'Systemics', 'SOCS'),
(40001191, 40001191, 'PIYUSH CHAUHAN', 'Faculty', 'Informatics', 'SOCS'),
(40001192, 40001192, 'RASHMI SHARMA', 'Faculty', 'Systemics', 'SOCS'),
(40001198, 40001198, 'CHRISTALIN NELSON  S', 'Faculty', 'Systemics', 'SOCS'),
(40001211, 40001211, 'ABHISHEK PANDEY', 'Faculty', 'Cybernetics', 'SOCS'),
(40001237, 40001237, 'ROOHI SILLE', 'Faculty', 'Systemics', 'SOCS'),
(40001272, 40001272, 'BHUPENDRA SINGH', 'Faculty', 'Virtualization', 'SOCS'),
(40001275, 40001275, 'ALIND', 'Faculty', 'Virtualization', 'SOCS'),
(40001281, 40001281, 'JUHI AGARWAL', 'Faculty', 'Informatics', 'SOCS'),
(40001284, 40001284, 'SACHI CHOUDHARY', 'Faculty', 'Virtualization', 'SOCS'),
(40001285, 40001285, 'NILIMA SALANKAR FULMARE', 'Faculty', 'Virtualization', 'SOCS'),
(40001286, 40001286, 'HIMANSHU SAHU', 'Faculty', 'Cybernetics', 'SOCS'),
(40001287, 40001287, 'AMIT VERMA', 'Faculty', 'Informatics', 'SOCS'),
(40001308, 40001308, 'HARVINDER SINGH', 'Faculty', 'Virtualization', 'SOCS'),
(40001310, 40001310, 'KAMALPREET SINGH', 'Faculty', 'Cybernetics', 'SOCS'),
(40001326, 40001326, 'NINNI SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001334, 40001334, 'ARADHANA KUMARI SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001371, 40001371, 'DEEPAK KUMAR SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001372, 40001372, 'ARJUN ARORA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001388, 40001388, 'RICHA CHOUDHARY', 'Faculty', 'Informatics', 'SOCS'),
(40001397, 40001397, 'RAVI SHANKER SINGHAL', 'Faculty', 'Informatics', 'SOCS'),
(40001442, 40001442, 'SAURABH SHANU', 'Faculty', 'Virtualization', 'SOCS'),
(40001443, 40001443, 'AMAR SHUKLA', 'Faculty', 'Virtualization', 'SOCS'),
(40001449, 40001449, 'APURVA GUPTA', 'Faculty', 'Informatics', 'SOCS'),
(40001460, 40001460, 'VED PRAKASH BHARDWAJ', 'Faculty', 'Cybernetics', 'SOCS'),
(40001461, 40001461, 'ALOK JHALDIYAL', 'Faculty', 'Systemics', 'SOCS'),
(40001463, 40001463, 'SHAHINA ANWARUL', 'Faculty', 'Systemics', 'SOCS'),
(40001464, 40001464, 'DEEPA JOSHI', 'Faculty', 'Systemics', 'SOCS'),
(40001469, 40001469, 'AVITA KATAL', 'Faculty', 'Virtualization', 'SOCS'),
(40001470, 40001470, 'VIDYANAND MISHRA', 'Faculty', 'Systemics', 'SOCS'),
(40001471, 40001471, 'SUSHEELA DAHIYA', 'Faculty', 'Computer Application', 'SOCS'),
(40001472, 40001472, 'ANUSHREE SAH', 'Faculty', 'Virtualization', 'SOCS'),
(40001473, 40001473, 'ABHIJIT KUMAR', 'Faculty', 'Informatics', 'SOCS'),
(40001485, 40001485, 'SANDIP KUMAR CHAURASIYA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001500, 40001500, 'KALPANA RANGRA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001504, 40001504, 'AMBIKA AGGARWAL', 'Faculty', 'Virtualization', 'SOCS'),
(40001511, 40001511, 'ANURAG SINGH TOMAR', 'Faculty', 'Systemics', 'SOCS'),
(40001517, 40001517, 'SUMIT KUMAR', 'Faculty', 'Systemics', 'SOCS'),
(40001519, 40001519, 'SHELLY', 'Faculty', 'Virtualization', 'SOCS'),
(40001520, 40001520, 'AMBER HAYAT', 'Faculty', 'Systemics', 'SOCS'),
(40001524, 40001524, 'PARDEEP SINGH', 'Faculty', 'Cybernetics', 'SOCS'),
(40001526, 40001526, 'DHIVIYA ROSE J', 'Faculty', 'Computer Application', 'SOCS'),
(40001530, 40001530, 'AMITAVA CHOUDHURY', 'Faculty', 'Informatics', 'SOCS'),
(40001533, 40001533, 'MITALI CHUGH', 'Faculty', 'Computer Application', 'SOCS'),
(40001545, 40001545, 'SANDEEP PRATAP SINGH', 'Faculty', 'Virtualization', 'SOCS'),
(40001555, 40001555, 'DHARANI KUMAR TALAPULA', 'Faculty', 'Virtualization', 'SOCS'),
(40001557, 40001557, 'KESHAV KAUSHIK', 'Faculty', 'Systemics', 'SOCS'),
(40001567, 40001567, 'TRIPTI MISRA', 'Faculty', 'Systemics', 'SOCS'),
(40001607, 40001607, 'AMRENDRA NATH TRIPATHI', 'Faculty', 'Virtualization', 'SOCS'),
(40001611, 40001611, 'SAURABH JAIN', 'Faculty', 'Systemics', 'SOCS'),
(40001612, 40001612, 'DURGANSH SHARMA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001616, 40001616, 'ANURAG JAIN', 'Faculty', 'Virtualization', 'SOCS'),
(40001617, 40001617, 'BHUPESH KUMAR DEWANGAN', 'Faculty', 'Informatics', 'SOCS'),
(40001621, 40001621, 'GAYTRI', 'Faculty', 'Cybernetics', 'SOCS'),
(40001622, 40001622, 'THIPENDRA PAL SINGH', 'HOD', 'Informatics', 'SOCS'),
(40001623, 40001623, 'PRASHANT RAWAT', 'Faculty', 'Systemics', 'SOCS'),
(40001636, 40001636, 'VARUN SAPRA', 'Faculty', 'Systemics', 'SOCS'),
(40001641, 40001641, 'SHAMIK TIWARI', 'Faculty', 'Virtualization', 'SOCS'),
(40001657, 40001657, 'SHUBHI SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001671, 40001671, 'ROHIT SRIVASTAVA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001672, 40001672, 'AMIT SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001684, 40001684, 'AHATSHAM', 'Faculty', 'Informatics', 'SOCS'),
(40001685, 40001685, 'PRAVIN DAGDEE', 'Faculty', 'Virtualization', 'SOCS'),
(40001713, 40001713, 'PUSHPENDRA KUMAR RAJPUT', 'Faculty', 'Cybernetics', 'SOCS'),
(40001714, 40001714, 'TANUPRIYA CHOUDHURY', 'Faculty', 'Informatics', 'SOCS'),
(40001724, 40001724, 'KIRAN KUMAR RAVULAKOLLU', 'Assistant Dean', '', 'SOCS'),
(40001735, 40001735, 'ADARSH KUMAR', 'Faculty', 'Systemics', 'SOCS'),
(40001740, 40001740, 'ALOK AGGARWAL', 'Faculty', 'Systemics', 'SOCS'),
(40001765, 40001765, 'LALIT KANE', 'Faculty', 'Virtualization', 'SOCS'),
(40001785, 40001785, 'DEEPSHIKHA BHARGAVA', 'Faculty', 'Informatics', 'SOCS'),
(40001793, 40001793, 'NITIKA GOENKA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001799, 40001799, 'ROHIT TANWAR', 'Faculty', 'Systemics', 'SOCS'),
(40001803, 40001803, 'RAHUL KUMAR SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001814, 40001814, 'AVIRAL SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001815, 40001815, 'CHANDRA MANI SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001819, 40001819, 'VIVEK LOKCHAND SHAHARE', 'Faculty', 'Informatics', 'SOCS'),
(40001823, 40001823, 'BHAVANA KAUSHIK', 'Faculty', 'Systemics', 'SOCS'),
(40001824, 40001824, 'ANUJ KUMAR', 'Faculty', 'Informatics', 'SOCS'),
(40001825, 40001825, 'BIKRAM PRATIM BHUYAN', 'Faculty', 'Informatics', 'SOCS'),
(40001833, 40001833, 'ASHISH KAILASHCHANDRA SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001855, 40001855, 'GOUTAM DATTA', 'Faculty', 'Informatics', 'SOCS'),
(40001857, 40001857, 'DHIRENDRA KUMAR SHARMA', 'Faculty', 'Cybernetics', 'SOCS'),
(40001878, 40001878, 'AKASHDEEP BHARDWAJ', 'Faculty', 'Systemics', 'SOCS'),
(40001898, 40001898, 'MRINAL GOSWAMI', 'Faculty', 'Systemics', 'SOCS'),
(40001920, 40001920, 'PRATEEK GUPTA', 'Faculty', 'Systemics', 'SOCS'),
(40001928, 40001928, 'ANUPAM SINGH', 'Faculty', 'Informatics', 'SOCS'),
(40001931, 40001931, 'SHWETA MONGIA', 'Faculty', 'Informatics', 'SOCS'),
(40001932, 40001932, 'KAUSHIK GHOSH', 'Faculty', 'Computer Application', 'SOCS'),
(40001934, 40001934, 'SUGANDHA SHARMA', 'Faculty', 'Informatics', 'SOCS'),
(40001938, 40001938, 'EKTA MANOJ UPADHYAY', 'Faculty', 'Virtualization', 'SOCS'),
(40001941, 40001941, 'SONALI VYAS', 'Faculty', 'Computer Application', 'SOCS'),
(40001952, 40001952, 'ABHIRUP KHANNA', 'Faculty', 'Virtualization', 'SOCS'),
(40001953, 40001953, 'SUDHANSHU SRIVASTAVA', 'Faculty', 'Informatics', 'SOCS'),
(40002035, 40002035, 'SUNIL GUPTA', 'Faculty', 'Systemics', 'SOCS'),
(40002037, 40002037, 'DEEPIKA KOUNDAL', 'Faculty', 'Virtualization', 'SOCS'),
(40002039, 40002039, 'SILKY GOEL', 'Faculty', 'Cybernetics', 'SOCS'),
(40002380, 40002380, 'VIRENDER KADYAN', 'Faculty', 'Informatics', 'SOCS'),
(40002381, 40002381, 'SONIA', 'Faculty', 'Systemics', 'SOCS'),
(40002388, 40002388, 'SHIV NARESH SHIVHARE', 'Faculty', 'Informatics', 'SOCS'),
(40002391, 40002391, 'GOURAV BATHLA', 'Faculty', 'Cybernetics', 'SOCS');

-- --------------------------------------------------------

--
-- Table structure for table `socs`
--

CREATE TABLE `socs` (
  `Department` varchar(50) DEFAULT NULL,
  `SCI` int(11) DEFAULT NULL,
  `Scopus` int(11) DEFAULT NULL,
  `eSCI` int(11) DEFAULT NULL,
  `UGC Approved` int(11) DEFAULT NULL,
  `Other` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socs`
--

INSERT INTO `socs` (`Department`, `SCI`, `Scopus`, `eSCI`, `UGC Approved`, `Other`) VALUES
('Informatics', NULL, NULL, NULL, NULL, NULL),
('Systemics', NULL, NULL, NULL, NULL, NULL),
('Cybernetics', NULL, NULL, NULL, NULL, NULL),
('Virtualization', NULL, NULL, NULL, NULL, NULL),
('Computer Application', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sap_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
