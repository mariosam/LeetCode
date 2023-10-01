/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { peakIndexInMountainArray } from './PeakIndexInMountainArray.js'

TEST('Starting PeakIndexInMountainArray test...', (t) => {
    //Test 1
    let want = 1
    let got = peakIndexInMountainArray( [0,1,0] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = peakIndexInMountainArray( [0,2,1,0] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = peakIndexInMountainArray( [0,10,5,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
