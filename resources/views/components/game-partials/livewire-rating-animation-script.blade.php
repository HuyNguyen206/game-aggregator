<script>
        Livewire.on('addRating', params => {
            console.log(params)
            var bar = new ProgressBar.Circle(document.querySelector(`#game_${params.id}`), {
                color: 'white',
                // This has to be the same size as the maximum width to
                // prevent clipping
                strokeWidth: 6,
                trailWidth: 3,
                trailColor: '#4A5568',
                easing: 'easeInOut',
                duration: 2500,
                text: {
                    autoStyleContainer: false
                },
                from: { color: '#aaa', width: 1 },
                to: { color: '#333', width: 4 },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);

                    var value = Math.round(circle.value() * 100);
                    if (value === 0) {
                        circle.setText('0%');
                    } else {
                        circle.setText(`${value}%`);
                    }

                }
            });
            bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
            bar.text.style.fontSize = '.8rem';

            bar.animate(params.rating);
        })
</script>
