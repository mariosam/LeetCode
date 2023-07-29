/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { getAverages } from './KRadiusSubarrayAverages.js'

TEST('Starting KRadiusSubarrayAverages test...', (t) => {
    //Test 1
    let want = [-1,-1,-1,5,4,4,-1,-1,-1]
    let got = getAverages( [7,4,3,9,1,8,5,2,6], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [100000]
    got = getAverages( [100000], 0 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [-1]
    got = getAverages( [8], 100000 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
