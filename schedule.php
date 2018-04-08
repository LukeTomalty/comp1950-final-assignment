<?php include 'templates/htmlTop.php';?>
<!-- include if specific styles are needed (aka remove both comment lines)-->
<link rel="stylesheet" href="styles/schedule.css">
<?php include 'templates/header.php';?>
<!-- html body code -edit body below -->
<div id="selector">
    <h1>Class Schedule</h1>
    <p>Select a day to view in the list below to see what will happen on that day.</p>
    <select id="selection">
            <option value="default" selected="selected">-Select Day-</option>
            <option value="day1">Day 1</option>
            <option value="day2">Day 2</option>
            <option value="day3">Day 3</option>
            <option value="day4">Day 4</option>
            <option value="day5">Day 5</option>
            <option value="day6">Day 6</option>
            <option value="day7">Day 7</option>
            <option value="day8">Day 8</option>
            <option value="day9">Day 9</option>
            <option value="day10">Day 10</option>
            <option value="day11">Day 11</option>
            <option value="day12">Day 12</option>
    </select> 
</div>

<div id="day1" class="content">
    <h1>Day 1</h1>
    <div class="split">
        <div>
            <h2>Learning Outcomes</h2>
                <ul>
                    <li>Course Introduction</li>
                    <li>Setup Development Environment</li>
                    <li>FTP Setup</li>
                    <li>HTML and CSS Review</li>
                    <li>HTML5 Video and Audio</li>
                </ul>
        </div>
        <div>
            <h2>No Assignments Due</h2>
        </div>
    </div>
</div>

<div id="day2" class="content">
    <h1>Day 2</h1>
    <div class="split">
        <div>
            <h2>Learning Outcomes</h2>
                <ul>
                    <li>CSS @font-face</li>
                    <li>Responsive Web Design</li>
                </ul>
        </div>
        <div>
            <h2>Assignments Due</h2>
                <ul>
                    <li>Assignment 1</li>
                </ul>
        </div>
    </div>
</div>

<div id="day3" class="content">
    <h1>Day 3</h1>
    <div class="split">
        <div>
            <h2>Learning Outcomes</h2>
                <ul>
                    <li>Flexbox</li>
                </ul>
        </div>
        <div>
            <h2>Assignments Due</h2>
                <ul>
                    <li>Assignment 2</li>
                </ul>
        </div>
    </div>
</div>

<div id="day4" class="content">
    <h1>Day 4</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>CSS3 Styling</li>
                        <li>CSS3 Selectors</li>
                        <li>CSS Transitions and Animations</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Assignment 3</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day5" class="content">
    <h1>Day 5</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Responsive Images</li>
                        <li>Mobile Navigation Systems</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Assignment 4</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day6" class="content">
    <h1>Day 6</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Mid Term Exam</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Assignment 5</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day7" class="content">
    <h1>Day 7</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>CSS Grid</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Mid Term Project</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day8" class="content">
    <h1>Day 8</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>SASS</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Assignment 6</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day9" class="content">
    <h1>Day 9</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Git and GitHub</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Assignment 7</li>
                    </ul>
            </div>
        </div>
</div>

<div id="day10" class="content">
    <h1>Day 10</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Servers</li>
                        <li>htaccess</li>
                        <li>PHP Review</li>
                        <li>JavaScript Review</li>
                    </ul>
            </div>
            <div>
                <h2>No Assignments Due</h2>
            </div>
        </div>
</div>

<div id="day11" class="content">
    <h1>Day 11</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Lab Time</li>
                    </ul>
            </div>
            <div>
                <h2>No Assignments Due</h2>
            </div>
        </div>
</div>

<div id="day12" class="content">
    <h1>Day 12</h1>
        <div class="split">
            <div>
                <h2>Learning Outcomes</h2>
                    <ul>
                        <li>Final Exam</li>
                        <li>Lab Time</li>
                    </ul>
            </div>
            <div>
                <h2>Assignments Due</h2>
                    <ul>
                        <li>Final Group Project</li>
                    </ul>
            </div>
        </div>
</div>

<!-- html body code -edit body above -->
<?php include 'templates/footer.php';?>
<!-- js code --> <script src="./scripts/dayselector.js"></script>
<?php include 'templates/htmlBottom.php';?>