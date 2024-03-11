<div id="select">
    <h3 class="ct">線上訂票</h3>
    <div class="order">
        <div>
            <label>電影:</label>
            <select name="movie" id="movie"></select>
        </div>
        <div>
            <label>日期:</label>
            <select name="date" id="date"></select>
        </div>
        <div>
            <label>場次:</label>
            <select name="session" id="session"></select>
        </div>
        <button onclick="booking()">確定</button>
        <button>重置</button>
    </div>
</div>
<div id="booking" style="display: none;"></div>
<script>
    let url = new URl(window.location.href);

    function getmovie() {
        $.post("./api/get_movie.php", (movies) => {
            $("#movie").html(movies);
            if (url.searchParams.has('id')) {
                $(`#movie option[value='${url.searchParams.get('id')}']`).prop('selected', true);
            }
            getdate($("#movie").val())
        })
    }

    function getdate(id) {
        $.post("./api/get_date.php", {
            id
        }, (dates) => {
            $("#date").html(dates);
            let movie = $("#movie").val();
            let date = $("#date").val();
            getSession(movie, date)
        })
    }

    function getsession(movie, date) {
        $.post("./api/get_session.php", {
            movie,
            date
        }, (session) => {
            $("#session").html(session);
        })
    }
    $("#movie").on("change", function() {
        getdate($(this).val())
    })
    $("#date").on("change", function() {
        getsession($("#movie option:selected").text(), $(this).val())
    })

    function booking() {
        let order = {
            movie_id: $("#movie").val(),
            date: $("#date").val(),
            sesssion: $("#session").val()
        }
        $.post("./api/booking.php",order,(booking)=>{
            $("#booking").html(booking)
            $("#select").hide();
            $("#booking").show();
        })
    }
</script>