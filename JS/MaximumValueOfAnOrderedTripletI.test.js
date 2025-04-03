/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumTripletValue } from './MaximumValueOfAnOrderedTripletI.js'

TEST('Starting MaximumValueOfAnOrderedTripletI test...', (t) => {
    //Test 1
    let want = 77
    let got = maximumTripletValue( [12,6,1,2,7] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 133
    got = maximumTripletValue( [1,10,3,4,19] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = maximumTripletValue( [1,2,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
