pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/atarftcode/KSI2025.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Run Unit Test') {
            steps {
                bat 'vendor\\bin\\phpunit --testdox'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploy simulasi...'
            }
        }
    }
}
