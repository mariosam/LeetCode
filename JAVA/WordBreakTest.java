/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class WordBreakTest {

    @Test
	public void testWordBreak() throws Exception {
        //Test 1
        boolean want = true;
        List<String> wordDict = new ArrayList<String>();
        wordDict.add("leetcode");
        wordDict.add("code");
        boolean got = WordBreak.wordBreak( "leetcode", wordDict );
        assertEquals(want, got);
        //Test 2
        want = true;
        wordDict = new ArrayList<String>();
        wordDict.add("apple");
        wordDict.add("pen");
        got = WordBreak.wordBreak( "applepenapple", wordDict );
        assertEquals(want, got);
        //Test 3
        want = false;
        wordDict = new ArrayList<String>();
        wordDict.add("cats");
        wordDict.add("dog");
        wordDict.add("sand");
        wordDict.add("and");
        wordDict.add("cat");
        got = WordBreak.wordBreak( "catsandog", wordDict );
        assertEquals(want, got);
	}

}
