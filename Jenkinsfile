pipeline {
  agent any
  stages {
    stage('Step1') {
      steps {
        echo 'step1'
      }
    }

    stage('step2') {
      steps {
        mail(subject: 'test pipeline', body: 'test pipeline', bcc: 'khadimndao5991@gmail.com', charset: 'utf-8', from: 'contact@byfallcode.com')
      }
    }

  }
}