<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TaniHub optional</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
        <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
        <style>
            .header{
                margin-top: 50px;
                text-align: center;
            }
            .case{
                background-color: #fafafa;
                padding: 30px;
                margin: 20px 0;
            }
            .case__title{
                margin: 0;
                font-size: 30px;
            }
            .case__form{
                margin-top: 20px;
            }
            .case__submit{
                margin-top: 29px;
            }
            .case_output{
                padding: 20px;
                background-color: #eee;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1 class="header">TaniHub Optional</h1>
    </div>
    <div class="container" id="roman">
        <div class="case">
            <h2 class="case__title">Case 3.1 - Roman Converter</h2>
            <div class="row case__form">
                <form action="romanconverter">
                    <div class="ten columns">
                        <label for="number">Your number</label>
                        <input class="u-full-width" type="number" name="number" id="number">
                    </div>
                    <div class="two columns case__submit">
                        <button class="button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="roman">
        <div class="case">
            <h2 class="case__title">Case 3.3 - Integer Partitioning</h2>
            <div class="row case__form">
                <form action="partition">
                    <div class="ten columns">
                        <label for="number">Your number</label>
                        <input class="u-full-width" type="number" name="number" id="number">
                    </div>
                    <div class="two columns case__submit">
                        <button class="button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="roman">
        <div class="case">
            <h2 class="case__title">Case 3.4 - Byte Swapper</h2>
            <div class="row case__form">
                <form action="byte_swap">
                    <div class="ten columns">
                        <label for="number">Your byte</label>
                        <input class="u-full-width" type="text" name="number" id="number">
                    </div>
                    <div class="two columns case__submit">
                        <button class="button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="roman">
        <div class="case">
            <h2 class="case__title">Case 3.5 - Repetition Hater</h2>
            <div class="row case__form">
                <form action="unique">
                    <div class="ten columns">
                        <label for="number">Your word</label>
                        <input class="u-full-width" type="text" name="word" id="number">
                    </div>
                    <div class="two columns case__submit">
                        <button class="button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
