   # Redesigning the website Eudoxos  
   **Collaborator**: Stavroula Iatropoulou https://gitlab.com/stavIatrop
  ## What is Eudoxos  
  Eudoxos is a greek state website used for managing university books.   
  **The (current) website**: https://eudoxus.gr/ (only Greek version)    
  There are **four main groups** using this website:  
  * **Students** who will state each semester which books want for their courses  
  * * **Publishers** who will state which books they offer  
  * * **University officials** who will "connect" courses and books  
  * * **Pickup up points** like bookshops which the student will go to receive his book
 ## Our goal  
 This redesigning project is part of a university assignment of a course called Human-Computer Interaction. The main goal was to find the problems of the current website, redesign it and implement the new design. 
 The project consisted of 3 parts:  
 1. **Heuristic evaluation** of the current website and report of the problems. The heuristic evaluation was mainly based on Nielsen's [10 Usability Heuristics for User Interface Design](https://www.nngroup.com/articles/ten-usability-heuristics/).  
 The report: reports/EudoxosUsabilityReport.pdf (currently only in Greek)  
 2.  **Designing the new website** based on UCD (User-Centered Design)     
     1. Decide the two of the above groups which we will develop (we chose the student and the publisher) and write representative **personas** about them. [More on personas](https://www.nngroup.com/articles/persona/).
     2. Analyze their requirements, write state diagrams about them, write scenarios and conclude in specifications which will be used to make the scenario fulfilled.
     3. Design a sitemap and low fidelity wireframes based on the above specifications using Balsamiq Wireframes.  
  The report: reports/RedesigningEudoxos.pdf (currently only in Greek)  
3. **Implement** the design developing a fully functional website using the above wireframes and state diagrams. The content of the website is in Greek.

## Technologies Used

* **Design**: StarUML and Balsamiq wireframes
* **Development**: HTML5, CSS, Javascript (with Bootstrap4 and jQuery) and XAMPP as a PHP development environment. The database model was created in MySQL workbench and used the export script in phpmyadmin (eudoxosDBscript.sql).

## Services implemented

* Login and registration of students and publishers
* Create a statement of books for the current semester (student)
* Overview and edit current statement (student)
* History of statements
* Search of books based on author, title, ISBN, keywords (everyone)
* Upload a book (publisher)
* Profile overview and edit (student and publisher)
* Help based on the group you belong (student and publisher)


## TODOs
* Translate in English the two reports (EudoxosUsabilityReport.pdf, RedesigningEudoxos.pdf
* Translate in English the whole website
* Complete the publisher services adding overview and edit of uploaded books



