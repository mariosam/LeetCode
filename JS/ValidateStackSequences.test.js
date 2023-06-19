/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { validateStackSequences } from './ValidateStackSequences.js'

TEST('Starting ValidateStackSequences test...', (t) => {
    //Test 1
    let want = true
    let got = validateStackSequences( [1,2,3,4,5], [4,5,3,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = validateStackSequences( [1,2,3,4,5], [4,3.5,1,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
