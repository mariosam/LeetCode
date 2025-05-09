/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { buildArray } from './BuildArrayFromPermutation.js'

TEST('Starting BuildArrayFromPermutation test...', (t) => {
    //Test 1
    let want = [0,1,2,4,5,3]
    let got = buildArray( [0,2,1,5,3,4] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [0,1,2,4,5,3]
    got = buildArray( [5,0,1,2,3,4] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
