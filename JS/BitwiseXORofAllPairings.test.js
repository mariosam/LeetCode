/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { xorAllNums } from './BitwiseXORofAllPairings.js'

TEST('Starting BitwiseXORofAllPairings test...', (t) => {
    //Test 1
    let want = 13
    let got = xorAllNums( [2,1,3], [10,2,5,0] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = xorAllNums( [1,2], [3,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
