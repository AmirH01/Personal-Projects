<html>

    <head>
        <link rel="stylesheet" href="./reset.css" type="text/css"/>
        <link rel="stylesheet" href="./styling.css" type="text/css"/>
    </head>


    <header>
        <hgroup>
            <h1>Amir Hadzic</h1>
            <h2>Full-time University Student</h2>
        </hgroup>
    </header>

    <nav>
        <a href="#about">About Me</a>
        <a href="#skills">Skills and Achievements</a>
        <a href="#education">Education and Qualifications</a>
        <a href="#experience">Experience</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
        <a href="viewBlog.php">Blog</a>
    </nav>


    <article>

        <section>
            <div id="skills">
                <h3>Skills and Achievements</h3><br>

                <ul>
                    <li>Delivering a consistent high stadnard of service</li>
                    <li>Showing great perseverance-not satisfied until the job is done</li>
                    <li>Excellent time-management and organisational skills</li>
                    <li>Good at following instructions and following own intiative</li>
                    <li>Flexible and adapt to change with ease</li>
                </ul>
            </div>
        </section>

        <section>
            <div id="about">
                <h3>About Me</h3><br>

                <figure>
                    <img src="amirPic.jpg" alt="Amir Hadzic" width="130">
                    <figcaption>Amir Hadzic</figcaption>
                </figure>

                <p>
                    My name is Amir Hadzic and I am a full-time Computer Science 
                    student at Queen Mary University of London. 
                    My interests are machine learning and computer graphics. 
                    I am persistent, meaning I will not let a task go unfinished even if it seems impossible or stressful. 
                    I want to be able to tell myself that I at least had a good shot at it if I ever get stuck and cannot go forward without help. 
                    I also find myself good at problem solving, always trying to find the easiest and fastest way to solve a problem with efficiency, even for things that are not related to computer science. 
                    Fitness is an interest outside of computer science that I enjoy, as I find myself to be a more efficient worker and have clearer thoughts when I have had time to myself. 
                    It makes me feel more relaxed and less stressed, taking good care of my mental and physical health. 
                </p>
            </div>
        </section>

        <section>
            <div id="education">
                <h3>Education and Qualifications</h3><br>

                <p><strong>2013-2018</strong> Langdon Academy: GCSEs:</p> <p>Three grades 9s, two grade 8s, two grade 7s, one grade 6, two grade 5s</p><br>
                <p><strong>2018-2020</strong> Newham Collegiate Sixth Form:</p><p>A-level Mathematics: A*, A-level Further Mathematics: A, A-level Physics: B</p>
            </div>
        </section>

        <section>
            <div id="experience">
                <h3>Experience</h3>
                <h4>Tate and Lyle</h4>
                <ul>
                    <li>Hands-on experience with engineers in work environments consisting of many safety hazards</li>
                    <li>Insight into the real-world problems faced by an engineer</li>
                    <li>Taught necessary IT skills to fill out vital company information into spreadsheets</li>
                </ul>
                <h4>UCL Project-X</h4>
                <ul>
                    <li>Challenging experience which greatly improved my leadership skills as I was the only fluent programmer</li>
                    <li>Helped me with my confidence when dealing with a unique problem that I have not encountered before</li>
                    <li>Improved my methods for logical thinking as I broke down complicated tasks into simple instructions</li>
                </ul>
                <h4>Tutoring</h4>
                <ul>
                    <li>Tutoring a wide range of age groups from primary school to sixth form students has taught me how to
                        communicate with different audiences with different levels of understanding</li>
                    <li>Learnt a great deal of time management balancing school life with a part time job whilst going to the gym daily</li>
                </ul>
            </div>
        </section>

        <aside>
            <div id="blog">
                <form action="login.php" method="POST">
                    <fieldset>
                        <label><h3>Blog</h3></label><br>
                        <input type="email" name="email" placeholder="Email"><br>
                        <input type="password" name="password" placeholder="Password" required minlength="8"><br>
                        <input type="submit">
                    </fieldset>
                </form>
            </div>
        </aside>

        <section>
            <div id="portfolio">
                <h3>Portfolio</h3>
                <h4>Computer Systems and Networks MIPS assembly codes:</h4>
                <ul>
                    <li><a href="COURSEWORK Q1_remainder_quotient.txt">Code that prints the quotient and remainder of two inputted numbers</a></li>
                    <li><a href="COURSEWORK Q2_absolute.txt">Code that returns the largest absolute value</a></li>
                    <li><a href="lab9sumOf.txt">Code that returns the sum of the integers up to the inputted value</a></li>
                </ul>


                <h4>Procedural Programming codes:</h4>
                <ul>
                    <li><a href="polishNotation.txt">Code that calculates and returns the value of an inputted expression of polish notation that only uses recursion</a></li>
                    <li><a href="ppFinal.txt">Code that informs an asthmatic whether or not to go hospital and prints and save the data they logged for the doctor to view</a></li>
                    <li><a href="ppMini.txt">Code that recreates the Pointless TV Game Show</a></li>
                </ul>
                <h4>Professional and Research Practice papers/slides:</h4>
                <ul>
                    <li><a href="Group14.2_ECS427U_assignment1 (6).pdf">CRISPR case study</a></li>
                    <li><a href="Assignment 2.pdf">E-waste management for cloud technology</a></li>
                    <li><a href="PRP_2020_Assignment_3_Guide_Template_6.docx">Plan for AI assistant that helps doctors with diagnosing cancer patients</a></li>
                </ul>
            </div>
        </section>

        <section>
            <div id="contact">
                <h3>Contact</h3>
                <h4>Email: amir.hadzic123@gmail.com</h4>
                <h4>Telephone: 07484204362</h4>
                </div>
        </section>

    </article>

</html>