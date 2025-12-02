pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/atarftcode/KSI2025.git'
            }
        }

        stage('Build') {
            steps {
                echo 'Sedang melakukan proses build...'
            }
        }

        stage('Test') {
            steps {
                echo 'Menjalankan test...'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploy selesai!'
            }
        }
    }
}
