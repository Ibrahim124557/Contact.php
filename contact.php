<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>musculation</title>
    <style>
        

:root {
    --primary-color: #b92929;
    --secondary-color:  #b92929;
    --background-color: #f5f5f500;
    --text-color: #333333;
    --success-color: #af4c4c;
}

.main {
    background-color: blueviolet;
    color: var(--text-color);
    line-height: 1.6;
}


.contact-container {
    max-width: 1200px;
    margin: -3rem auto 4rem;
    padding: 0 5rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    padding-top:11%;
    margin-top: 0%;
}

.contact-info, .contact-form {
    background: white;
    border-radius: 10px;
    padding: 3rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    
}

.info-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    
   
}

.info-icon {
    background: var(--primary-color);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
    
}

.info-content h3 {
    color: var(--primary-color);
    margin-bottom: 2rem;
}



.social-link {
    background: #f5f5f5;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: var(--primary-color);
    color: white;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-color);
    font-weight: bold;

}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 0.8rem;
    border: 2px solid #eee;
    border-radius: 4px;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: var(--primary-color);
    outline: none;
}

.form-group textarea {
    height: 150px;
    resize: vertical;
}

.submit-btn {
    background: var(--primary-color);
    color: white;
    padding: 1rem 2rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s ease;
    
}

.submit-btn:hover {
    background: var(--secondary-color);
}

.map-container {
    margin-top: 4rem;
    padding: 1rem 2rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.map-frame {
    width: 100%;
    height: 400px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Message de succès */
.success-message {
    display: none;
    background: var(--success-color);
    color: white;
    padding: 1rem;
    border-radius: 4px;
    margin-top: 1rem;
    text-align: center;
}

/* Design responsive */
@media (max-width: 768px) {
   

    .contact-container {
        margin-top: -2rem;
        padding: 0 1rem;
    }

    .map-container {
        padding: 0 1rem;
    }
}

/* Animation de chargement */
@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.loading {
    position: relative;
}

.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border: 3px solid #fff;
    border-top-color: transparent;
    border-radius: 50%;
    animation: rotate 1s linear infinite;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

    </style>
</head>
<body class="col">
<?php
 include'header.php';
 ?>
  <div class="main">

    <div class="contact-container"> 
        <div class="contact-info"> 
            <div class="info-item"> 
                <div class="info-icon">📍</div>
                <div class="info-content">  
                    <h3>Notre Adresse</h3>  
                    <p>☈ 9/11 Rue De Genéve A coté De L'Hotel Plein Ciel<br> DJIBOUTI, DJIBOUTI</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">📞</div>
                <div class="info-content">
                    <h3>Téléphone</h3>
                    <p>☎ (+253) 21 35 83 51</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">📧</div>
                <div class="info-content">
                    <h3>Email</h3>
                    <p>✔ musculationfitness@gmail.Com</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">⏰</div>
                <div class="info-content">
                    <h3>Horaires d'ouverture</h3>
                    <p>Lundi - Vendredi: 9h - 18h<br>Samedi: 10h - 16h</p>
                </div>
            </div>

            <div >
              
            </div>
        </div>

        <div class="contact-form">
            <form action="traitement.php">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <select name="sujet" required>
                        <option value="">Sélectionnez un sujet</option>
                        <option value="reservation">Réservation</option>
                        <option value="information">Demande d'information</option>
                        <option value="reclamation">Réclamation</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Envoyer le message</button>
                 <a href="acceuil.php" class="submit-btn">retour</a>
            </form>
        </div>
    </div>
   

    <?php
 include'footer.php';
 ?> </div>
</body>
</html>
   