/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxValue } from './JumpGameIX.js'

TEST('Starting JumpGameIX test...', (t) => {
    //Test 1
    let want = [2,2,3]
    let got = maxValue( [2,1,3] )
    t.assert( want.toString() === got.toString(), "Expect: "+want+" Got: "+got)
    //Test 2
    want = [3,3,3]
    got = maxValue( [2,3,1] )
    t.assert( want.toString() === got.toString(), "Expect: "+want+" Got: "+got)

    t.end()
})
