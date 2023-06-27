/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canMakeArithmeticProgression } from './CanMakeArithmeticProgressionFromSequence.js'

TEST('Starting CanMakeArithmeticProgressionFromSequence test...', (t) => {
    //Test 1
    let want = true
    let got = canMakeArithmeticProgression( [3,5,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = canMakeArithmeticProgression( [1,2,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
