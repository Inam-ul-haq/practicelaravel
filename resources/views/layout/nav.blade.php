<section class="header">
    <div class="fluid-container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AT tech</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="{{ route('questions.index') }}">Questions
                            </a></li>
                        <li><a href="{{route('options.index')}}">Option</a></li>
                        <li><a href="{{route('quizs.index')}}">Quiz</a></li>
                        <li><a href="{{route('results.index')}}">Result</a></li>

                    </ul>


                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</section>
