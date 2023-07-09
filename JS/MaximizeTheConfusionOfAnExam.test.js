/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxConsecutiveAnswers } from './MaximizeTheConfusionOfAnExam.js'

TEST('Starting MaximizeTheConfusionOfAnExam test...', (t) => {
    //Test 1
    let want = 4
    let got = maxConsecutiveAnswers( "TTFF", 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = maxConsecutiveAnswers( "TFFT", 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = maxConsecutiveAnswers( "TTFTTFTT", 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
