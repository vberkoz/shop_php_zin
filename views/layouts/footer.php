            </div>
        </div>
    </div>

    <style>
        .footer {
            height: 50px;
            text-align: center;
            margin-top: 50px;
        }
    </style>

    <div class="footer"><p>Copyright &copy; 2020</p></div>

            <script src="https://code.jquery.com/jquery-3.5.0.min.js"
                    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
                    crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".add-to-bag").click(function () {
                let id = $(this).attr("data-id");
                $.post(`/bag/add-ajax/${id}`, {}, function (res) {
                    $("#bag-count").html(res);
                });
                return false;
            });
        })
    </script>
</body>
</html>