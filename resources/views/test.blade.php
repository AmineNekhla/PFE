@extends('header')

@section('content')

<br><br><br><br>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="container text-center" style="width: 80%;">
                        <!-- Left content -->
                        <h2>Importer des PDF</h2>
                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="pdfInput" class="form-label">Sélectionnez un fichier PDF</label>
                                <input type="file" class="form-control" id="pdfInput" name="fichier">
                            </div>
                            <button class="btn btn-dark">Importer</button>
                        </form>
                        <div class="container text-center" style="margin-top: 10%;">
                            <h2>Listening Vocal</h2>
                            <button id="startStopButton" class="btn btn-dark">Commencer l'écoute</button>
                            <div class="display bg-light p-3"></div>
                            <div class="controllers"></div>
                        </div>
                    </div>
                    
                </div>

                

                <div class="col-md-6">
                    <!-- Ligne noire -->
                <div class="line"></div>
                    <div class="container text-center" style="width: 80%;">
                        <!-- Right content -->
                        <div class="text text-center">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
      const display = document.querySelector('.display');
      const controllerWrapper = document.querySelector('.controllers');

    let recognition;

    if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
        recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.lang = 'fr-FR';
        
        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            addMessage(`${transcript}`);
        };

        recognition.onerror = (event) => {
            addMessage(`Erreur lors de la reconnaissance vocale: ${event.error}`);
        };

     
    } else {
        addMessage('Votre navigateur ne prend pas en charge la reconnaissance vocale.');
    }

    const startStopButton = document.getElementById('startStopButton');

startStopButton.addEventListener('click', () => {
    if (recognition) {
        if (recognition.isListening) {
            recognition.stop();
            addMessage('L\'écoute vocale a arrêté.');
        } else {
            startSpeechRecognition().then(transcript => {
                    addMessage(`Fin de l'écoute vocale. Votr Texte: ${transcript}`);
                })
                .catch(error => {
                    addMessage(`Erreur lors de la reconnaissance vocale: ${error}`);
                });
        }
    }
});


//ytsna hta ysali speech 3ad ifachi liya texte dyali
function startSpeechRecognition(){
    return new Promise((resolve,reject)=>{
        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            resolve(transcript);
        };
        recognition.onerror = (event) => {
            reject(event.error);
        };
        recognition.start();
        addMessage('L\'écoute vocale a commencé.');
    });
}


  
    function addMessage(text) {
        const msg = document.createElement('p');
        msg.textContent = text;
        msg.classList.add('bg-light', 'p-3', 'text-dark');
        display.append(msg);
    }
    </script>


<style>
    /* Add your custom styles here */

    /* Style for the left content */
    .container.text-center h2 {
        color: #333; /* Change the color to a professional one */
        margin-bottom: 20px;
    }

    
</style>

    </main>


    @endsection

