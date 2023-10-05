/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { PredictTheWinner } from './PredictTheWinner.js'

TEST('Starting PredictTheWinner test...', (t) => {
    //Test 1
    let want = false
    let got = PredictTheWinner( [1,5,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = PredictTheWinner( [1,5,233,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
