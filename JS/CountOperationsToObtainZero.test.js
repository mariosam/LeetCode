/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countOperations } from './CountOperationsToObtainZero.js'

TEST('Starting CountOperationsToObtainZero test...', (t) => {
    //Test 1
    let want = 3
    let got = countOperations( 2, 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = countOperations( 10, 10 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
