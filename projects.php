<?php

$projects = [
    "laidup" => [
    "category" => "Frontend & Backend Development",
    "title" => "LaidUp",

    "intro" => "A license and permit management system for Laid-Up Ships developed for JPDS under the supervision of my workplace supervisor, working alongside another developer including myself.",

    "stats" => [
        "timeline" => "Throughout my Apprenticeship (2025 - 2026)",
        "role" => "Full Stack Developer",
        "team" => "Team (2 Developers)",
        "tools" => "HTML, CSS, JavaScript, PHP, MySQL, Docker"
    ],

    "description" => "
    Developed and maintained a web-based system for managing license and permit applications for Laid-Up Ships for JPDS.

    Due to confidentiality and access restrictions, only selected screens are included in this portfolio. Sensitive information within screenshots has been censored where necessary.

    A key responsibility in this project was redesigning and improving the existing system interface, which was originally not mobile-friendly and had usability issues on smaller screens. The redesign focused on improving responsiveness, accessibility, and overall user experience across devices.

    In addition to UI improvements, I also contributed functional enhancements based on client feedback gathered through system demonstrations. These sessions allowed me to better understand user pain points and implement iterative improvements to reduce workflow friction and improve system usability.

    The system is currently live but restricted to authenticated users only and is not publicly accessible.
    ",

    "images" => [
    [
        "src" => "assets/images/laidup/1.png",
        "desc" => "Login screen for system authentication"
    ],
    [
        "src" => "assets/images/laidup/2.png",
        "desc" => "Redesigned system interface applied across all modules, featuring the updated user dashboard with a consistent layout and improved usability"
    ],
    [
        "src" => "assets/images/laidup/3.png",
        "desc" => "Introduced status badges to improve visibility of application progress and user awareness"
    ],
    [
        "src" => "assets/images/laidup/4.png",
        "desc" => "Additional actions page for managing available system operations"
    ],
    [
        "src" => "assets/images/laidup/5.png",
        "desc" => "Simplified user profile page for viewing and updating account information"
    ],
    [
        "src" => "assets/images/laidup/6.png",
        "desc" => "Improved inspector dashboard table with sorted application records (oldest to newest) and time-based status indicators for better tracking"
    ]
],

    "takeaways" => "
    This project was one of my first experiences working on a full real-world system that involved both frontend and backend responsibilities.

    Through this project, I challenged myself to learn and apply new technologies such as Docker, DomPDF for document generation, and Mailtrap for email testing. It significantly strengthened my confidence in backend development and helped me become more comfortable working in a production-like environment.

    Overall, it was a valuable experience that improved both my technical skills and my understanding of working within a development team on a real operational system.
    ",

    "reflection" => "
    I am genuinely grateful for the opportunity to contribute to this project, even though there were challenging moments where debugging and system complexity made it difficult to progress at times.

    However, those challenges became the most valuable part of the experience, as they pushed me to learn faster and think more critically about system design and problem-solving.

    I also deeply appreciate the trust given by my supervisor, who allowed me to take ownership of tasks and even present system demonstrations directly to clients. This experience played a significant role in building my confidence as a developer and strengthened my appreciation for teamwork in a real working environment.
    "
],

    "bayudata" => [
        "category" => "Frontend Development",
        "title" => "BayuData",

        "intro" => "Frontend development of a Sabah state government open data platform that provides access to public datasets for analysis, learning, and innovation.",

        "stats" => [
            "timeline" => "Internship (2024-2025)",
            "role" => "Frontend Developer",
            "team" => "Solo",
            "tools" => "HTML, CSS, JavaScript, Bootstrap"
        ],

        "description" => "
        Developed the frontend interface for a public sector open data platform used by government agencies, private organizations, and the public.

        The project was delivered in two design iterations. The first version was a simple, minimal interface that was completed and shipped within a one-week deadline based on initial requirements. This version is currently live at <a href='https://bayudata.sabah.gov.my' target='__blank'>https://bayudata.sabah.gov.my</a>.

        After the initial release, I designed an improved iteration by refining the layout structure, enhancing usability, and creating a more polished and user-friendly interface for exploring datasets. This updated version has not yet been deployed as the platform is still in the process of aggregating and onboarding datasets from multiple departments. Both versions were designed with responsiveness and accessibility across devices in mind.

        The design was inspired by Malaysia’s Open Data Portal (data.gov.my), using it as a reference for layout structure, information hierarchy, and overall user experience. I also referred to their publicly available Figma design system to guide the interface design decisions.

        Additionally, a dark mode interface was implemented to enhance accessibility and improve user experience in low-light usage scenarios.
        ",

        "images" => [
            [
                "src" => "assets/images/bayudata/1.jpg",
                "desc" => "Landing page for BayuData"
            ],
            [
                "src" => "assets/images/bayudata/2.jpg",
                "desc" => "Dataset catalogue with filters by agency and category, including search functionality"
            ],
            [
                "src" => "assets/images/bayudata/3.jpg",
                "desc" => "Dataset archive page with a similar layout to the catalogue"
            ],
            [
                "src" => "assets/images/bayudata/4.jpg",
                "desc" => "Custom 404 error page with a navigation button back to the landing page"
            ],
            [
                "src" => "assets/images/bayudata/5.jpg",
                "desc" => "Top section of the dataset details page"
            ],
            [
                "src" => "assets/images/bayudata/6.jpg",
                "desc" => "Bottom section of the dataset details page"
            ],
            [
                "src" => "assets/images/bayudata/7.jpg",
                "desc" => "Landing page for BayuData (Dark Mode)"
            ],
            [
                "src" => "assets/images/bayudata/8.jpg",
                "desc" => "First version of BayuData (Currently live as of June 2026)"
            ]
        ],

        "takeaways" => "
        Gained confidence in frontend development in a real project environment beyond university assignments. Unlike guided coursework, this project required independent decision-making in structuring layouts and designing interfaces, which strengthened my ability to translate requirements into functional UI.
        ",

        "reflection" => "
        I would improve the dataset filtering experience by introducing date-based filters to help users refine and locate relevant data more efficiently. In addition, I would also explore adding more features to improve overall usability and dataset discovery.
        ",

        "pdf" => 'assets/documents/bayudata.pdf'
    ],

    "bus-app" => [
        "category" => "UI/UX Design",
        "title" => "Interface Design for a Bus Ticket Booking App",

        "intro" => "A mobile bus ticketing app prototype designed in Figma, allowing users to book tickets, view upcoming journeys, access travel history, and track bus locations in real time.",

        "stats" => [
            "timeline" => "2 days (2022)",
            "role" => "UI/UX Designer",
            "team" => "Individual",
            "tools" => "Figma"
        ],

        "description" => "
        Designed a mobile bus transportation application prototype in Figma as part of an individual university project.

        The application was created to improve the public transportation experience by providing users with a centralized platform for managing their journeys. Key features included ticket booking, viewing upcoming trips, accessing trip history, and real-time bus tracking to help users stay informed throughout their travels.

        The project involved designing multiple mobile screens and creating a cohesive user experience across different stages of the journey, from booking tickets to monitoring active trips. Special attention was given to information hierarchy, navigation flow, and interface consistency to ensure users could access important travel information quickly and efficiently.

        As one of my early UI/UX design projects, this assignment provided practical experience in mobile application design, wireframing, screen layout creation, and interactive prototyping using Figma. The project also strengthened my understanding of designing interfaces that balance functionality with usability.
        ",

        "takeaways" => "
        As one of my earliest projects created after completing a Figma workshop, this assignment allowed me to put newly learned concepts into practice and build confidence in using the platform. The experience strengthened my understanding of UI/UX fundamentals, including layout design, information hierarchy, consistency, and creating intuitive user experiences across multiple screens.
        ",

        "reflection" => "
        As one of my earlier UI/UX projects during my Computer Science journey, this design reflects my initial exploration of visual design principles.

        At the time, I used a red-based color scheme without fully considering its common association with error states and its impact on user comfort and readability. With my current understanding of UI/UX principles, I would approach the design differently by selecting a more neutral and accessible color palette that better supports usability and improves overall user experience.

        Revisiting this project today would allow me to strengthen its visual hierarchy, accessibility, and overall design consistency.
        ",

        "figma" => '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" height="600" src="https://embed.figma.com/proto/AgjZ6yWScHPSBHkTbrGfWq/Bus-App-Interface-Design?node-id=402-2&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=402%3A2&embed-host=share" allowfullscreen></iframe>',

        "figma-editor" => 'https://www.figma.com/design/AgjZ6yWScHPSBHkTbrGfWq/Bus-App-Interface-Design?node-id=0-1&t=UH5Qix01l69UcndF-1'

    ],

    "student-community-app" => [
        "category" => "UI/UX Design",
        "title" => "Interface Design for a Student Community App",

        "intro" => "A mobile student community app prototype designed in Figma to help students connect with clubs, manage academic responsibilities, and communicate with one another through a centralized platform.",

        "stats" => [
            "timeline" => "2 days (2021)",
            "role" => "UI/UX Designer",
            "team" => "Individual",
            "tools" => "Figma"
        ],

        "description" => "
        Designed a mobile student community application prototype in Figma as part of an individual university assignment focused on exploring interface design principles.

        The application was designed to support both academic and social interaction within a student environment. It includes a profile page where users can view personal information such as club affiliation, student ID, and student email. The tasks section allows users to manage academic assignments by viewing pending and completed tasks, as well as submitting assignments directly through the platform. The messaging feature enables users to communicate with other students through an integrated chat system.

        The design process focused on structuring multiple interconnected features into a cohesive mobile experience, with attention given to navigation, information hierarchy, and usability across different sections of the application.
        ",

        "takeaways" => "
        As one of my earliest projects created after completing a Figma workshop, this assignment allowed me to put newly learned concepts into practice and build confidence in using the platform. The experience strengthened my understanding of UI/UX fundamentals, including layout design, information hierarchy, consistency, and creating intuitive user experiences across multiple screens.
        ",

        "reflection" => "
        As this was an early UI/UX project, design decisions were primarily based on assumptions without formal user research. In addition, I did not fully consider data privacy practices at the time, particularly in displaying sensitive information such as student email and student ID directly within the profile page.

        If I were to revisit this project, I would take a more privacy-conscious approach by limiting the exposure of sensitive data and implementing features such as toggle visibility (e.g., show/hide student ID or email). I would also begin the design process with user research to better understand what information should be displayed, what should remain private, and how users prefer to control their personal data within the application.
        ",

        "figma" => '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" height="600" src="https://embed.figma.com/proto/BoWrxqXRw53GKrllGNgtkZ/Interface-Design?node-id=201-11&p=f&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=201%3A11&embed-host=share" allowfullscreen></iframe>',

        "figma-editor" => 'https://www.figma.com/design/BoWrxqXRw53GKrllGNgtkZ/Interface-Design?node-id=0-1&t=5jbxWkYtgEewfM0d-1'
    ],

    "esokong" => [
        "category" => "UI/UX Design",
        "title" => "Interface Design for ESokongWPSC Landing Page",

        "intro" => "A landing page designed in Figma for ESokongWPSC, a system used by KEPKAS, during my previous work experience at Jabatan Perkhidmatan Komputer Negeri.",

        "stats" => [
            "timeline" => "2 days (2025)",
            "role" => "UI/UX Designer",
            "team" => "Solo",
            "tools" => "Figma"
        ],

        "description" => "
        Designed a landing page interface for ESokongWPSC in Figma as part of my previous work experience at Jabatan Perkhidmatan Komputer Negeri.

        The objective of this task was to create a clear and structured landing page that introduces the ESokongWPSC system used by KEPKAS, focusing on presenting key system information in a simple and accessible format.

        The design was completed within a short timeframe of two days and focused on establishing a clean layout, clear information hierarchy, and an intuitive first impression for users accessing the system.

        This project was completed prior to the development phase of the system and served as the initial UI direction for the landing page implementation.
        ",

        "takeaways" => "
        This project served as an introductory task that helped me familiarize myself with the system’s structure and design expectations before progressing into backend development work.

        It provided an opportunity to quickly adapt to project requirements, translate instructions into a functional interface, and strengthen my confidence in using Figma within a real working environment.
        ",

        "reflection" => "
        I am satisfied with the overall design outcome, particularly in terms of layout clarity and information hierarchy for a landing page context.

        With additional backend knowledge at the time, I would have explored incorporating more meaningful analytics features beyond basic visitor tracking, such as user engagement insights or interaction-based metrics to provide deeper system feedback.

        However, given the scope of the task and time constraints, the current implementation effectively met the project requirements.
        ",

        "figma" => '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" height="600" src="https://embed.figma.com/proto/g2tBfuj2FB33yFO9tCHXPl/ESokong-Landing-Page?node-id=37-138&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&embed-host=share" allowfullscreen></iframe>',

        "figma-editor" => 'https://www.figma.com/design/g2tBfuj2FB33yFO9tCHXPl/ESokong-Landing-Page?node-id=0-1&t=sixqpLCsqzw6Fcbf-1'
    ],

    "medicine-reminder-app" => [
    "category" => "UI/UX Design & Mobile App Development",
    "title" => "Medicine Reminder App for Elderly and Caretakers",

    "intro" => "A final year project designed and developed for my degree in university, focusing on a medicine reminder system for elderly users and their caretakers to improve medication adherence and safety through scheduled reminders, tracking, and emergency support.",

    "stats" => [
        "timeline" => "2 Semesters (2023-2024)",
        "role" => "Mobile App Developer",
        "team" => "Individual",
        "tools" => "Android Studio, Figma, Google Forms"
    ],

    "description" => "
    Designed and developed a medicine reminder mobile application as a final year university project. The system was built to support both elderly users and their caretakers through role-based functionality.

    The project began with a research phase over approximately six months, which included writing project proposal drafts, conducting user research, and collecting feedback through Google Forms to understand user needs and pain points related to medication management.

    The application includes authentication and two user roles: elderly users and caretakers.

    For elderly users, the app provides features such as medication schedules, medication history, emergency SOS functionality, profile management, and access to emergency contacts. The SOS feature includes a 10-second countdown that automatically triggers an emergency call to 999 if not cancelled in time.

    For caretakers, the app allows management of linked elderly accounts, including adding, editing, viewing, and deleting medication schedules. Caretakers can also monitor medication history and manage profile linking between themselves and elderly users.

    Medication intake actions such as 'taken' or 'skipped' are recorded and stored in the database for tracking and history purposes. Additionally, alarm-based reminders notify elderly users at scheduled times to take their medication.

    The interface was built using Android Studio, and due to my beginner level at the time, the UI relied heavily on default components and basic layouts, with limited custom visual design.
    ",

    "takeaways" => "
This project helped me understand the complexity involved in building a large-scale application that combines UX research, design, and development within a single workflow.

It highlighted the importance of structured development processes and collaboration in managing complex systems, as handling all aspects independently required significant effort across multiple stages of the project.

Through this experience, I gained a better appreciation of how team-based development can improve efficiency, decision-making, and overall project quality in real-world applications.
",

    "images" => [
            [
                "src" => "assets/images/fyp/1.png",
                "desc" => "Thumbnail picture portraying mockups of the app"
            ],
            [
                "src" => "assets/images/fyp/2.png",
                "desc" => "Login page and reset password feature"
            ],
            [
                "src" => "assets/images/fyp/3.png",
                "desc" => "Sign Up Form for Caretaker and Elderly Users"
            ],
            [
                "src" => "assets/images/fyp/4.png",
                "desc" => "Main menu for Caretaker and Elderly Users"
            ],
            [
                "src" => "assets/images/fyp/5.png",
                "desc" => "Recorded Medication Intake History"
            ],
            [
                "src" => "assets/images/fyp/6.png",
                "desc" => "Flow for Emergency SOS feature"
            ],
            [
                "src" => "assets/images/fyp/7.png",
                "desc" => "CRUD for Medicine Management from a Caretaker User's POV"
            ],
        ],


    "reflection" => "
    Looking back, I would have approached this project with a more realistic scope, especially considering that I was still a beginner handling the entire workflow independently, from UX research and design to development.

    I would also improve the development setup by using a physical Android device for testing instead of relying solely on an emulator, which significantly slowed down my workflow.

    Due to hardware limitations, I was only able to perform manual testing and was unable to conduct proper User Acceptance Testing (UAT) with real users. If I were to revisit this project, I would prioritize testing on real devices and include structured user testing to validate usability and improve the overall user experience.
    ",

    "figma" => '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" height="600" src="https://embed.figma.com/proto/rIFJmeE3qJkDKnxNtz6Ita/Medicine-Reminder-App--Copy-?node-id=28-226&p=f&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=28%3A226&show-proto-sidebar=1&embed-host=share" allowfullscreen></iframe>',
    "figma-editor" => 'https://www.figma.com/design/rIFJmeE3qJkDKnxNtz6Ita/Medicine-Reminder-App--Copy-?node-id=0-1&t=0buN57h7VP1MvxeM-1',
    
    "pdf" => 'https://ftsm.ukm.my/v6/public/assets/file/technicalreport/A188384_TReport.pdf'
],

"aurtrip" => [
    "category" => "UI/UX Design",
    "title" => "AurTrip",

    "intro" => "A mobile activity booking app prototype inspired by travel and experience platforms such as Klook, designed to help users discover, browse, and book activities through an intuitive mobile experience.",

    "stats" => [
        "timeline" => "1 month (Dec 2023 - Jan 2024)",
        "role" => "UI/UX Designer",
        "team" => "4 People",
        "tools" => "Figma"
    ],

    "description" => "
Designed selected interfaces for AurTrip, a mobile activity booking application inspired by existing experience-booking platforms such as Klook.

As part of a group assignment, I was responsible for designing the Home/Activities section and the Activity Details interface. The Home screen was designed to help users discover available activities, while the Activity Details page focused on presenting relevant information about a selected activity. Users were able to view activity details, select the desired number of tickets for purchase, and proceed with the booking process or return to the Activities section to continue browsing.

The project provided experience in designing interfaces for a travel and booking context while considering information hierarchy, content presentation, and user navigation.
    ",

    "takeaways" => "
This project provided valuable experience working within a team environment, where maintaining design consistency across screens required regular communication and collaboration between team members.

It also highlighted the importance of aligning design decisions, visual styles, and user flows when multiple designers are contributing to the same product. The experience gave me a better understanding of how teamwork and clear communication contribute to creating a cohesive user experience.
",

    "reflection" => "
If I were to revisit this project today, I would explore introducing activity categories and filtering options to help users discover activities more efficiently.

I would also recommend using a more engaging and distinctive colour palette. While the neutral grey theme provided a clean appearance, it may not have been the most effective choice for an activity booking application, where a more vibrant visual identity could help create a more engaging and memorable user experience.
",

"figma" => '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" height="600" src="https://embed.figma.com/proto/yoVdEZa9aKcqgBwHFvoXun/2323-mobile-dev?node-id=853-792&scaling=scale-down&content-scaling=fixed&page-id=853%3A669&starting-point-node-id=853%3A792&embed-host=share" allowfullscreen></iframe>',
"figma-editor" => 'https://www.figma.com/design/yoVdEZa9aKcqgBwHFvoXun/2323-mobile-dev?node-id=853-784&t=NBMPJxoGfjRq91ax-1'
]
];

function getProjectData($projects, $project_name){
    $arr = $projects[$project_name];

    return $arr;
}