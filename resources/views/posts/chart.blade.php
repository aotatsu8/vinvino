<canvas id="RaderChart{{ $key }}"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script>
var ctx = document.getElementById("RaderChart{{ $key }}");
var post = '{{$post}}';
var data = post.split(',').map(Number);
var RadarChart = new Chart(ctx, {
    type: 'radar', 
    data: { 
        labels: ["甘味", "渋味", "酸味", "香り", "余韻", "ボディ"],
        datasets: [{
            label: '',
            data: data,
            backgroundColor: 'RGBA(225,95,150, 0.5)',
            borderColor: 'RGBA(225,95,150, 1)',
            borderWidth: 1,
            pointBackgroundColor: 'RGB(46,106,177)'
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: false,
            text: 'ワインチャート'
        },
        scale:{
            ticks:{
                display: false
            }
        }
    }
});
</script>
