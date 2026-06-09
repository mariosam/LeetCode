/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { pivotArray } from './PartitionArrayAccordingToGivenPivot.js'

TEST('Starting PartitionArrayAccordingToGivenPivot test...', (t) => {
    //Test 1
    let want = [9,5,3,10,10,12,14]
    let got = pivotArray( [9,12,5,10,14,3,10], 10 )
    t.assert( want.toString() === got.toString(), "Expect: "+want)
    //Test 2
    want = [-3,2,4,3]
    got = pivotArray( [-3,4,3,2], 2 )
    t.assert( want.toString() === got.toString(), "Expect: "+want)

    t.end()
})
