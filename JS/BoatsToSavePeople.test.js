/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numRescueBoats } from './BoatsToSavePeople.js'

TEST('Starting BoatsToSavePeople test...', (t) => {
    //Test 1
    let want = 1
    let got = numRescueBoats( [1,2], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = numRescueBoats( [3,2,2,1], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = numRescueBoats( [3,5,3,4], 5 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
