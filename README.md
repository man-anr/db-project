# db-project
Quiz System for Student and Lecturer

## Front-End
Built using Bootstrap 5 framework.
## Installation

See how to [clone the repository](https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/cloning-a-repository-from-github/cloning-a-repository)

## Usage

For the meantime, you can only run the [login.html](https://github.com/man-anr/db-project/blob/main/login.html) to preview the login page, unless you've installed [Wamp](https://www.wampserver.com/en/)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)


## Project Packges
db-project
├─ .git
│  ├─ COMMIT_EDITMSG
│  ├─ config
│  ├─ description
│  ├─ FETCH_HEAD
│  ├─ HEAD
│  ├─ hooks
│  │  ├─ applypatch-msg.sample
│  │  ├─ commit-msg.sample
│  │  ├─ fsmonitor-watchman.sample
│  │  ├─ post-update.sample
│  │  ├─ pre-applypatch.sample
│  │  ├─ pre-commit.sample
│  │  ├─ pre-merge-commit.sample
│  │  ├─ pre-push.sample
│  │  ├─ pre-rebase.sample
│  │  ├─ pre-receive.sample
│  │  ├─ prepare-commit-msg.sample
│  │  ├─ push-to-checkout.sample
│  │  └─ update.sample
│  ├─ index
│  ├─ info
│  │  └─ exclude
│  ├─ logs
│  │  ├─ HEAD
│  │  └─ refs
│  │     ├─ heads
│  │     │  └─ main
│  │     └─ remotes
│  │        └─ origin
│  │           └─ main
│  ├─ ORIG_HEAD
│  └─ refs
│     ├─ heads
│     │  └─ main
│     ├─ remotes
│     │  └─ origin
│     │     └─ main
│     └─ tags
├─ .gitignore
├─ admin
│  ├─ action.php
│  ├─ add.php
│  ├─ admin.php
│  ├─ delete.php
│  ├─ error_log
│  ├─ index.php
│  ├─ lecturer.php
│  ├─ student.php
│  ├─ subject.php
│  ├─ update.php
│  └─ workload.php
├─ alerts
│  └─ toast.php
├─ auth
│  ├─ error_log
│  ├─ index.php
│  ├─ invalid-auth.php
│  └─ login.php
├─ css
│  ├─ bootstrap.min.css
│  ├─ bootstrap.min.css.map
│  ├─ dataTables.bootstrap5.min.css
│  └─ style.css
├─ database
│  ├─ config.php
│  └─ quiz_system.sql
├─ etc
│  └─ admin.php
├─ index.php
├─ js
│  ├─ bootstrap.bundle.min.js
│  ├─ bootstrap.bundle.min.js.map
│  ├─ dataTables.bootstrap5.min.js
│  ├─ jquery-3.5.1.js
│  ├─ jquery.dataTables.min.js
│  └─ script.js
├─ lecturer
│  ├─ assignment
│  │  ├─ delete.php
│  │  ├─ downloads-student.php
│  │  ├─ downloads.php
│  │  ├─ error_log
│  │  ├─ index.php
│  │  ├─ lecturer-uploads
│  │  │  └─ Normalization.pdf
│  │  ├─ result.php
│  │  └─ upload.php
│  ├─ error_log
│  ├─ index.php
│  └─ quiz
│     ├─ multiple
│     │  ├─ add.php
│     │  ├─ create.php
│     │  ├─ delete.php
│     │  ├─ error_log
│     │  ├─ index.php
│     │  ├─ result.php
│     │  └─ update.php
│     └─ truefalse
│        ├─ add.php
│        ├─ create.php
│        ├─ delete.php
│        ├─ error_log
│        ├─ index.php
│        ├─ result.php
│        └─ update.php
├─ README.md
├─ reset
│  ├─ error_log
│  ├─ reset.controller.php
│  ├─ reset.php
│  └─ success-reset.php
├─ student
│  ├─ assignment
│  │  ├─ downloads.php
│  │  ├─ error_log
│  │  ├─ index.php
│  │  ├─ student-uploads
│  │  │  ├─ 0399811.pdf
│  │  │  ├─ assignment1-bassiman-bin-anuar-ai190276-asnwersheet.pdf
│  │  │  ├─ BIC21404 Lab 1.docx
│  │  │  ├─ bic21404_labsheet2.pdf
│  │  │  ├─ bic21404_labsheet6.pdf
│  │  │  ├─ Configuring Wireless LAN access.pdf
│  │  │  ├─ Data Dictionary.docx
│  │  │  ├─ intro.pdf
│  │  │  ├─ Lab1_Salmah.pdf
│  │  │  ├─ labassignment3.pdf
│  │  │  ├─ Normalization.pdf
│  │  │  ├─ Tutorial1_Salmah.pdf
│  │  │  └─ Tutorial_Zahirah.pdf
│  │  └─ upload.php
│  ├─ error_log
│  ├─ index.php
│  ├─ multiple
│  │  ├─ error_log
│  │  ├─ index.php
│  │  └─ validate-answer.php
│  ├─ register.php
│  └─ truefalse
│     ├─ error_log
│     ├─ index.php
│     └─ validate-answer.php
├─ template
│  ├─ content.html
│  ├─ navs-lect.php
│  ├─ navs-lecturer-assignment.php
│  ├─ navs-lecturer.php
│  ├─ navs-student.php
│  └─ navs.php
├─ test
│  ├─ index.php
│  ├─ lecturer
│  │  ├─ add_quiz.php
│  │  ├─ assets
│  │  │  ├─ css
│  │  │  │  ├─ app.css
│  │  │  │  ├─ bootstrap.css
│  │  │  │  ├─ pages
│  │  │  │  │  ├─ auth.css
│  │  │  │  │  ├─ chat.css
│  │  │  │  │  ├─ dripicons.css
│  │  │  │  │  ├─ email.css
│  │  │  │  │  └─ error.css
│  │  │  │  └─ widgets
│  │  │  │     ├─ chat.css
│  │  │  │     └─ todo.css
│  │  │  ├─ images
│  │  │  │  ├─ bg
│  │  │  │  │  └─ 4853433.jpg
│  │  │  │  ├─ faces
│  │  │  │  │  ├─ 1.jpg
│  │  │  │  │  ├─ 2.jpg
│  │  │  │  │  ├─ 3.jpg
│  │  │  │  │  ├─ 4.jpg
│  │  │  │  │  ├─ 5.jpg
│  │  │  │  │  ├─ 6.jpg
│  │  │  │  │  ├─ 7.jpg
│  │  │  │  │  └─ 8.jpg
│  │  │  │  ├─ logo
│  │  │  │  │  └─ logo.png
│  │  │  │  └─ samples
│  │  │  │     ├─ 1.png
│  │  │  │     ├─ 2.png
│  │  │  │     ├─ 3.png
│  │  │  │     ├─ 4.png
│  │  │  │     ├─ architecture1.jpg
│  │  │  │     ├─ banana.jpg
│  │  │  │     ├─ bg-mountain.jpg
│  │  │  │     ├─ building.jpg
│  │  │  │     ├─ error-403.png
│  │  │  │     ├─ error-404.png
│  │  │  │     ├─ error-500.png
│  │  │  │     ├─ jump.jpg
│  │  │  │     ├─ motorcycle.jpg
│  │  │  │     ├─ origami.jpg
│  │  │  │     └─ water.jpg
│  │  │  ├─ js
│  │  ├─ assignment.php
│  │  ├─ class.php
│  │  ├─ classassignment.php
│  │  ├─ classsubmit.php
│  │  ├─ create.php
│  │  ├─ createquiz_obj.php
│  │  ├─ createquiz_tf.php
│  │  ├─ includes
│  │  │  ├─ classnavbar.php
│  │  │  ├─ footer.php
│  │  │  ├─ header.php
│  │  │  ├─ navbar.php
│  │  │  └─ scripts.php
│  │  ├─ index.php
│  │  ├─ listquiz_obj.php
│  │  ├─ listquiz_tf.php
│  │  ├─ resultquiz_obj.php
│  │  └─ resultquiz_tf.php
│  └─ testingz.php
└─ test.php
