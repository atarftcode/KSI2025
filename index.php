pipeline {
    agent any

    stages {

        stage('Checkout Source Code') {
            steps {
                echo 'Mengambil kode dari GitHub...'
                git branch: 'main', url: 'https://github.com/atarftcode/KSI2025.git'
            }
        }

        stage('Menjalankan PHP') {
            steps {
                echo 'Menjalankan file index.php menggunakan PHP...'
                powershell '''
                    php index.php
                '''
            }
        }

    }
}
