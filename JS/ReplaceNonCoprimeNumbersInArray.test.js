/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { replaceNonCoprimes } from './ReplaceNonCoprimeNumbersInArray.js'

TEST('Starting ReplaceNonCoprimeNumbersInArray test...', (t) => {
    //Test 1
    let want = [12,7,6]
    let got = replaceNonCoprimes( [6,4,3,2,7,6,2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [2,1,1,3]
    got = replaceNonCoprimes( [2,2,1,1,3,3,3] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
