/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { putMarbles } from './PutMarblesInBags.js'

TEST('Starting PutMarblesInBags test...', (t) => {
    //Test 1
    let want = 4
    let got = putMarbles( [1,3,5,1], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = putMarbles( [1,3], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
