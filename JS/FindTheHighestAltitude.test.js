/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { largestAltitude } from './FindTheHighestAltitude.js'

TEST('Starting FindTheHighestAltitude test...', (t) => {
    //Test 1
    let want = 1
    let got = largestAltitude( [-5,1,5,0,-7] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = largestAltitude( [-4,-3,-2,-1,4,3,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
