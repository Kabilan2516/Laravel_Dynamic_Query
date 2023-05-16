


      <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                        <a href="#">Insert</a>
                        <ul class="dropdown">
                            <li><a name="user_form" href="/insert_user">user data</a></li>
                            <li><a name="question_form" href="/insert_question">Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">View</a>
                        <ul class="dropdown">

                            <li><a name="users" href="{{route('select',['table_name'=>'users'])}}">users</a></li>
                            <li><a name="question" href="{{route('select',['table_name'=>'question_bank'])}}">Question</a></li>
                        </ul>
                    </li>

                </ul>
                <ul>
                    <div>
                        <input type="text" name="" id="" placeholder="Search..">
                        <button type="submit">Submit</button>
                    </div>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
            </nav>
        </header>

        <br><br>
