/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { partitionString } from './OptimalPartitionOfString.js'

TEST('Starting OptimalPartitionOfString test...', (t) => {
    //Test 1
    let want = 4
    let got = partitionString( "abacaba" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = partitionString( "ssssss" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
